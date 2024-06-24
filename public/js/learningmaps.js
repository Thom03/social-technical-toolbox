L.mapbox.accessToken = 'pk.eyJ1IjoiZGxvdXJpZG8iLCJhIjoiY2o0ZmtwaWFsMTlheDMzcHNnNzdob3p4YiJ9.H6RYGmoe1ftZUEOobGL8zw';
var options = {
    minZoom:7,
    worldCopyJump: true,
}
var stibmap = L.mapbox.map('map',undefined,options).setView([-1.73795, 37.56620], 3);


L.mapbox.styleLayer('mapbox://styles/mapbox/light-v9',{
    attribution: 'Designed & Developed by  <a href="http://ciat.cgiar.org" class="primary">Alliance Bioversity and CIAT</a>',
}).addTo(stibmap);

//******************************************************************************************
//To Country layer
//******************************************************************************************

var countryLayer;  // Declare countryLayer variable globally


var learningLayer;
fetch('/llabsjson')
    .then(response => response.json())
    .then(data => {
        learningLayer = L.geoJSON(data, {
            style: {
                color: '#f15a31',
                weight: 2,
            },
            onEachFeature: function(feature, layer) {
                if (feature.properties && feature.properties.ADM1_EN) {
                    var bounds  = layer.getBounds();
                    var center  = bounds.getCenter(); // Adjust the offset as needed


                    var offsetLat = bounds.getNorthEast().lat + 0.02; // Adjust offset as necessary
                    var offsetLng = bounds.getNorthEast().lng;


                    var label = L.marker([offsetLat, offsetLng], {
                        icon: L.divIcon({
                            className: 'label-icon',
                            html: feature.properties.ADM1_EN,
                            iconSize: [100, 40], // Adjust as necessary
                            iconAnchor: [50, 20] // Adjust as necessary

                        })
                    }).addTo(stibmap);
                    // Create a line between the feature and the label
                    var latlngs = [
                        [center.lat, center.lng],
                        [offsetLat, offsetLng]
                    ];
                    var polyline = L.polyline(latlngs, {
                        color: '#f15a31',
                        weight: 2
                    }).addTo(stibmap);

                    layer.on('click', function(e) {
                        var content = '<p><strong>Country:</strong> ' + feature.properties.ADM1_EN + '</p>';
                        content += '<p><strong>Other Property:</strong> ' + feature.properties.some_other_property + '</p>';

                        document.getElementById('featureContent').innerHTML = content;
                        document.getElementById('floatingPane').style.display = 'block';
                    });

                    }

                }

            });
        learningLayer.addTo(stibmap);

        // Load initial content into the floating pane
        if (data.features.length > 0) {
            var firstFeature = data.features[0];
            var initialContent = '<p><strong>Country:</strong> ' + firstFeature.properties.ADM1_EN + '</p>';
            initialContent += '<p><strong>Other Property:</strong> ' + (firstFeature.properties.some_other_property || 'N/A') + '</p>';

            document.getElementById('featureContent').innerHTML = initialContent;
        } else {
            document.getElementById('featureContent').innerHTML = 'No features available.';
        }
    })
    .catch(error => console.error(error));


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


