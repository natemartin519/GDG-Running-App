<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

        <style type="text/css">
            html { height: 100% }
            body { height: 100%; margin: 0; padding: 0 }
            #map-canvas { height: 100% }
        </style>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaPseCLcboNGXK2Jj1TZUAEaNU5TC0cyI&libraries=visualization"></script>

        <script type="text/javascript">
            function initialize() {
                var heatmapData = [
                    {location: new google.maps.LatLng(43.407, -80.480), weight: 1}
                ];

                var firstPoint = new google.maps.LatLng(43.407, -80.480);

                var mapOptions = {
                    center: firstPoint,
                    zoom: 15
                };

                var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

                var heatmap = new google.maps.visualization.HeatmapLayer({
                    data: heatmapData
                });

                heatmap.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </head>

    <body>
        <div id="map-canvas">
    </body>
</html>