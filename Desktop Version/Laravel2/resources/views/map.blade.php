<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    @include('layouts.geolocation');
   
    <div id="map"></div>
    @include('layouts.javascript');

    @inlude('layouts.api');
    <script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqxO79s_5vqC4fTkONhcBm_-WS3A9G59o&callback=initMap">
    </script>
  </body>
</html>