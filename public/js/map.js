L.mapbox.accessToken = 'pk.eyJ1IjoiZGxvdXJpZG8iLCJhIjoiY2o0ZmtwaWFsMTlheDMzcHNnNzdob3p4YiJ9.H6RYGmoe1ftZUEOobGL8zw';
var options = {
    minZoom:2,
    worldCopyJump: true,
}
var map = L.mapbox.map('map',undefined,options).setView([0.5286709, 27.2723167], 3);

L.mapbox.styleLayer('mapbox://styles/mapbox/light-v9',{
    attribution: 'Data Bundles by <a href="http://ciat.cgiar.org" class="blue">HER+ Team</a>',
}).addTo(map);

//******************************************************************************************
//To Country layer
//******************************************************************************************
var countryLayer = L.geoJson().addTo(map);
var countries_geojson;
$.get('/countries-json', function(data){
    countries_geojson = data;
    controlCountryLayer();
});

function controlCountryLayer(){
    countryLayer.clearLayers();
    countryLayer = L.geoJson(
        countries_geojson,
        {
            style: countryStyle,
            onEachFeature: onEachFeature
        }
    ).addTo(map);
}
