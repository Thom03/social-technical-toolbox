L.mapbox.accessToken = 'pk.eyJ1IjoiZGxvdXJpZG8iLCJhIjoiY2o0ZmtwaWFsMTlheDMzcHNnNzdob3p4YiJ9.H6RYGmoe1ftZUEOobGL8zw';
var options = {
    minZoom:2,
    worldCopyJump: true,
}
var map = L.mapbox.map('map',undefined,options).setView([0.5286709, 27.2723167], 3);

L.mapbox.styleLayer('mapbox://styles/mapbox/light-v9',{
    attribution: 'Developed by <a href="http://ciat.cgiar.org" class="blue">Alliance and CIAT</a>',
}).addTo(map);

//******************************************************************************************
//To Country layer
//******************************************************************************************

// Fetch country data from the '/countries-json' route
// Fetch country data from the '/countries-json' route
fetch('/countries-json')
    .then(response => response.json())
    .then(data => {
        // Create a GeoJSON layer with country markers
        var geojson = {
            type: 'FeatureCollection',
            features: []
        };

        // Geocode country names and create GeoJSON features
        var geocodePromises = data.map(countryData => {
            var country = countryData.country;
            var geocodeUrl = `https://api.mapbox.com/geocoding/v5/mapbox.places/${country}.json?access_token=${L.mapbox.accessToken}`;
            return fetch(geocodeUrl)
                .then(response => response.json())
                .then(result => {
                    if (result.features.length > 0) {
                        var coordinates = result.features[0].center;
                        var feature = {
                            type: 'Feature',
                            properties: {
                                title: country,
                                admin_bound_1: countryData.admin_bound_1,
                                dataset_title: countryData.dataset_title
                            },
                            geometry: {
                                type: 'Point',
                                coordinates: coordinates
                            }
                        };
                        geojson.features.push(feature);
                    }
                });
        });

        Promise.all(geocodePromises)
            .then(() => {
                // Create a Leaflet GeoJSON layer
                var countryLayer = L.geoJSON(geojson, {
                    pointToLayer: function(feature, latlng) {
                        // Create a Mapbox marker with a custom icon
                        var marker = L.marker(latlng, {
                            icon: L.mapbox.marker.icon({
                                // Customize the marker icon here (e.g., color, size, shape)
                                'marker-color': '#153766',
                                'marker-size': 'medium',
                                'marker-symbol': 'circle'
                            })
                        });

                        // Add a popup to the marker
                        var popupContent = `<b>${feature.properties.title}</b><br>`;
                        if (feature.properties.admin_bound_1) {
                            popupContent += `Admin Bound 1: ${feature.properties.admin_bound_1}`;
                            popupContent += `Title: ${feature.properties.dataset_title}`;
                        }
                        // marker.bindPopup(popupContent);

                        // Add an event listener to open the Bootstrap modal on marker click
                        marker.on('click', function() {
                            $('#countryModal .modal-title').text(feature.properties.title);
                            $('#countryModal .modal-body').text(feature.properties.dataset_title);
                            // Additional code to populate the modal with content if needed
                            $('#countryModal').modal('show');
                        });

                        return marker;
                    }
                });

                // Add the GeoJSON layer to the map
                countryLayer.addTo(map);

                // Add clustering to the country layer
                var markers = new L.MarkerClusterGroup();
                markers.addLayer(countryLayer);
                map.addLayer(markers);
            });
    })
    .catch(error => {
        console.error('Failed to fetch country data:', error);
    });
