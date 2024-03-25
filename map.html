<!DOCTYPE html>
<html>
<head>
    <title>Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map { height: 500px; }
    </style>
</head>
<body>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([-1.2921, 36.8219], 7); // Centered on Nairobi, Kenya

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Load the GeoJSON data for Kenyan counties
var kenyaCountiesData = 'path/to/kenya-counties.geojson';
// Assuming you have a Leaflet map initialized and stored in a variable named 'map'

// Load the GeoJSON data for Kenyan counties
var kenyaCountiesData = 'path/to/kenya-counties.geojson';

// Define an array of county names you want to shade
var countiesToShade = ['Nairobi', 'Mombasa', 'Kisumu']; // Example counties

// Add GeoJSON layer to the map
var countiesLayer = L.geoJSON(null, {
    style: function (feature) {
        // Check if the county should be shaded
        if (countiesToShade.includes(feature.properties.name)) {
            return {
                fillColor: 'yellow',  // Fill color for shaded counties
                fillOpacity: 0.5,     // Fill opacity
                color: 'black',       // Stroke color
                weight: 1             // Stroke weight
            };
        } else {
            // Style for other counties
            return {
                fillColor: 'transparent',  // Transparent fill for non-shaded counties
                color: 'black',            // Stroke color
                weight: 1                  // Stroke weight
            };
        }
    }
}).addTo(map);

// Fetch GeoJSON data and add it to the counties layer
fetch(kenyaCountiesData)
    .then(response => response.json())
    .then(data => {
        // Filter the GeoJSON data to include only the counties to be shaded
        var filteredData = data.features.filter(feature => countiesToShade.includes(feature.properties.name));
        countiesLayer.addData({
            type: 'FeatureCollection',
            features: filteredData
        });
    })
    .catch(error => {
        console.error('Error loading GeoJSON data:', error);
    });


    // You can add more markers, polygons, or any other map elements here as needed.
</script>

</body>
</html>
