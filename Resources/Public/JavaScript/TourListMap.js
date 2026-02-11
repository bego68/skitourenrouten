document.addEventListener('DOMContentLoaded', function () {
    var mapElement = document.getElementById('mapid');
    var tourDataElement = document.getElementById('tour-data');

    if (mapElement && tourDataElement) {
        var apiKey = mapElement.dataset.apiKey;
        var iconPath = mapElement.dataset.iconPath;
        var tourData = JSON.parse(tourDataElement.textContent);

        if (tourData.length > 0) {
            // Initialize the map, centered on the first tour if possible, otherwise a default view.
            var initialCoords = tourData[0].latitude && tourData[0].longitude ? [tourData[0].latitude, tourData[0].longitude] : [47.5, 11.5];
            var map = L.map('mapid').setView(initialCoords, 8);

        // Add a tile layer
        var tileUrl = `https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png?apikey=${apiKey}`;
        var layer = new L.TileLayer(tileUrl, {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> Mitwirkende, Kartendarstellung: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (CC-BY-SA)'
        });
        map.addLayer(layer);

        // Define a custom icon
        var gipfelIcon = L.icon({
            iconUrl: iconPath,
            iconSize:     [38, 95], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            iconAnchor:   [-10,78], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [23, -76] // point from which the popup should open relative to the iconAnchor
        });

        // Add markers for each tour
        tourData.forEach(function(tour) {
            if (tour.latitude && tour.longitude) {
                var marker = L.marker([tour.latitude, tour.longitude], {icon: gipfelIcon}).addTo(map);
                marker.bindPopup('<b><a href="' + tour.url + '">' + tour.name + ' (' + tour.height + 'm)</a></b><br>' + tour.routename);
            }
        });
        }
    }
});
