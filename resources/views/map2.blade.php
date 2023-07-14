<!DOCTYPE html>
<html>
<head>
    <title>Map Page</title>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.5.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.5.0/mapbox-gl.js'></script>
    <style>
        #map { width: 100%; height: 800px; }
    </style>
</head>
<body>
<div id="map"></div>

{{--<script>--}}
{{--    mapboxgl.accessToken = 'pk.eyJ1IjoidG11dGV0aSIsImEiOiJjaWlscnpiZ3QwMDVqdm5tMGo0dGVjZmtqIn0.BbDTeGprNiMenusiwAVGPQ';--}}

{{--    // Fetch the country data from the Laravel route--}}
{{--    // Fetch the country data from the Laravel route--}}
{{--    fetch('/countries-json')--}}
{{--        .then(response => response.json())--}}
{{--        .then(data => {--}}
{{--            // Convert country names to GeoJSON features with accurate coordinates--}}
{{--            const promises = data.map(country => {--}}
{{--                const url = `https://api.mapbox.com/geocoding/v5/mapbox.places/${country}.json?access_token=${mapboxgl.accessToken}`;--}}
{{--                return fetch(url)--}}
{{--                    .then(response => response.json())--}}
{{--                    .then(result => {--}}
{{--                        if (result.features.length > 0) {--}}
{{--                            const coordinates = result.features[0].geometry.coordinates;--}}
{{--                            return {--}}
{{--                                type: 'Feature',--}}
{{--                                properties: {},--}}
{{--                                geometry: {--}}
{{--                                    type: 'Point',--}}
{{--                                    coordinates: coordinates,--}}
{{--                                },--}}
{{--                            };--}}
{{--                        }--}}
{{--                        return null;--}}
{{--                    });--}}
{{--            });--}}

{{--            Promise.all(promises)--}}
{{--                .then(features => {--}}
{{--                    const filteredFeatures = features.filter(feature => feature !== null);--}}
{{--                    const geojson = {--}}
{{--                        type: 'FeatureCollection',--}}
{{--                        features: filteredFeatures,--}}
{{--                    };--}}

{{--                    // Initialize the map--}}
{{--                    const map = new mapboxgl.Map({--}}
{{--                        container: 'map',--}}
{{--                        style: 'mapbox://styles/mapbox/streets-v11',--}}
{{--                        center: [0, 0], // Set the initial center of the map--}}
{{--                        zoom: 2, // Set the initial zoom level--}}
{{--                    });--}}

{{--                    // Add country points to the map dynamically--}}
{{--                    map.on('load', function () {--}}
{{--                        map.addSource('countries', {--}}
{{--                            type: 'geojson',--}}
{{--                            data: geojson,--}}
{{--                        });--}}

{{--                        map.addLayer({--}}
{{--                            id: 'country-points',--}}
{{--                            type: 'circle',--}}
{{--                            source: 'countries',--}}
{{--                            paint: {--}}
{{--                                'circle-color': '#ff0000',--}}
{{--                                'circle-radius': 6,--}}
{{--                                'circle-stroke-width': 2,--}}
{{--                                'circle-stroke-color': '#ffffff',--}}
{{--                            },--}}
{{--                        });--}}
{{--                    });--}}
{{--                });--}}
{{--        });--}}
{{--</script>--}}
</body>
</html>
