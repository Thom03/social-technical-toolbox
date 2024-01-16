L.mapbox.accessToken = 'pk.eyJ1IjoiZGxvdXJpZG8iLCJhIjoiY2o0ZmtwaWFsMTlheDMzcHNnNzdob3p4YiJ9.H6RYGmoe1ftZUEOobGL8zw';
var options = {
    minZoom:2,
    worldCopyJump: true,
}
var stibmap = L.mapbox.map('map',undefined,options).setView([0.5286709, 27.2723167], 3);


L.mapbox.styleLayer('mapbox://styles/mapbox/light-v9',{
    attribution: 'Designed & Developed by  <a href="http://ciat.cgiar.org" class="primary">Alliance Bioversity and CIAT</a>',
}).addTo(stibmap);

//******************************************************************************************
//To Country layer
//******************************************************************************************

var countryLayer;  // Declare countryLayer variable globally

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
                                dataset_title: countryData.dataset_title,
                                dataset_doi: countryData.dataset_doi,
                                dataset_author: countryData.dataset_author,
                                dataset_release_year: countryData.dataset_release_year,
                                impactAreas: countryData.impactAreas,
                                innovations: countryData.innovations

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
                countryLayer = L.geoJSON(geojson, {
                    pointToLayer: function(feature, latlng) {
                        // Create a Mapbox marker with a custom icon
                        var marker = L.marker(latlng, {
                            icon: L.mapbox.marker.icon({
                                // Customize the marker icon here (e.g., color, size, shape)
                                'marker-color': '#153766',
                                'marker-size': 'small',
                                'marker-symbol': 'circle'
                            })
                        });

                        // Add a popup to the marker
                        var popupContent = `<b>${feature.properties.title}</b><br>`;
                            // popupContent += `<p class="modal-popup-content"><strong>Admin Bound 1:</strong> ${feature.properties.admin_bound_1}</p>`;
                            popupContent += `<p class="modal-popup-content"></p>
                                             <div class="col-12 m-t-20">
                        <h4>Main Title</h4>
                        <p class="text-justify">${feature.properties.dataset_title}</p>
                    </div>`;

                        popupContent += `<p class="modal-popup-content">
                                    <div class="col-12 m-t-20">
                                        <h4>Author(s) </h4>
                                        <a href=""> <p"> ${feature.properties.dataset_author}</p> </a>
                                             </div>`;

                            popupContent += `<p class="modal-popup-content">
                                    <div class="col-12 m-t-20">
                                        <h4>Digital Object Identifer (DOI) </h4>
                                        <a href="{ ${feature.properties.dataset_doi} }"> <p class="badge badge-rounded badge-outline-info"> ${feature.properties.dataset_doi}</p> </a>
                                             </div>`;
                            popupContent += `<p class="modal-popup-content">
                                    <div class="col-12 m-t-20">
                                        <h4>Release Year </h4>
                                        <a href=""> <p"> ${feature.properties.dataset_release_year}</p> </a>
                                             </div>`;
                        popupContent += `<p class="modal-popup-content">
                    <div class="row">
                        <div class="col-12 m-t-20">
                            <h4>Social Innovations</h4>
                            ${feature.properties.innovations.filter(innovation => innovation.category === 'Social').map(innovation => `<p class="badge badge-rounded badge-outline-warning">${innovation.name}</p>`).join('') || '<p>None</p>'}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 m-t-20">
                            <h4>Technological Innovations</h4>
                            ${feature.properties.innovations.filter(innovation => innovation.category === 'Technological').map(innovation => `<p class="badge badge-rounded badge-outline-warning">${innovation.name}</p>`).join('') || '<p>None</p>'}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 m-t-20">
                            <h4>Technical Innovations</h4>
                            ${feature.properties.innovations.filter(innovation => innovation.category === 'Technical').map(innovation => `<p class="badge badge-rounded badge-outline-warning">${innovation.name}</p>`).join('') || '<p>None</p>'}
                        </div>
                    </div>`;
                            popupContent += `<p class="modal-popup-content">
                                        <div class="col-12 m-t-20">
                                            <h4>CGIAR Impact Areas</h4>
                                        ${feature.properties.impactAreas.map(impactArea => `<p class="badge badge-rounded badge-outline-primary">${impactArea}</p>`).join('')}
                                            </div>`;

                        // Add an event listener to open the Bootstrap modal on marker click
                        marker.on('click', function() {
                            $('#countryModal .modal-title').text(feature.properties.title);
                            $('#countryModal .modal-body').html(popupContent);



                            // Additional code to populate the modal with content if needed
                            $('#countryModal').modal('show');
                        });

                        return marker;
                    }
                });

                // Add the GeoJSON layer to the map
                countryLayer.addTo(stibmap);

                // Add clustering to the country layer
                var markers = new L.MarkerClusterGroup();
                markers.addLayer(countryLayer);
                stibmap.addLayer(markers);
            });
    })
    .catch(error => {
        console.error('Failed to fetch country data:', error);
    });

var boundaryLayer;
fetch('/getcountrygeojson')
    .then(response => response.json())
    .then(data => {
        // Create a Leaflet GeoJSON layer
        boundaryLayer = L.geoJSON(data, {
            style: {
                color: '#f15a31', // Customize the boundary color
                weight: 1, // Customize the boundary weight
            }
        });

        // Add the GeoJSON layer to the map
        boundaryLayer.addTo(stibmap);

    })
    .catch(error => {
        console.error('Failed to fetch administrative boundary data:', error);
    });

// Event listener for pressing Enter
document.getElementById('searchInput').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        searchCountry();
    }
});


var legend = L.control({ position: 'bottomleft' });

legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend');
    var grades = [0, 1, 2, 3, 4, 5]; // Define your dataset count ranges

    div.innerHTML += '<h4>Legend</h4>';

    // Loop through the ranges and generate a label with a colored square for each range
    for (var i = 0; i < grades.length; i++) {
        div.innerHTML +=
            '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
            grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
    }

    return div;
};

legend.addTo(stibmap);

// Function to determine color based on the dataset count
function getColor(d) {
    return d > 5 ? '#f15a31' :
        d > 4  ? '#ef7955' :
            d > 3  ? '#f47e60' :
                d > 2  ? '#f8a18f' :
                    d > 1   ? '#fbc4be' :
                        '#ffd8cd';
}

function controlDatasetsLayer() {
    var pointLayerCheckbox = document.getElementById('PointLayer');
    var polygonLayerCheckbox = document.getElementById('PolygonLayer');

    // Check the status of PointLayer checkbox and toggle visibility accordingly
    if (pointLayerCheckbox.checked) {
        stibmap.addLayer(countryLayer);
    } else {
        stibmap.removeLayer(countryLayer);
    }

    // Check the status of PolygonLayer checkbox and toggle visibility accordingly
    if (polygonLayerCheckbox.checked) {
        stibmap.addLayer(boundaryLayer);
    } else {
        stibmap.removeLayer(boundaryLayer);
    }
}

function searchCountry() {
    // Get the search input value
    var searchInputValue = document.getElementById('searchInput').value;

    // Find the feature in the GeoJSON data that matches the searched country
    var countryFeature = boundaryLayer.getLayers().find(layer => layer.feature.properties.country.toLowerCase() === searchInputValue.toLowerCase());

    if (countryFeature) {
        // Get the bounds of the country feature
        var bounds = countryFeature.getBounds();

        // Fit the map to the bounds of the country
        stibmap.fitBounds(bounds);
    } else {
        alert('Country not found');
    }
}


$(document).ready(function () {
    $('#myModal').modal('show');
});


