<!doctype html>
<html>
  <head>
    <title>Challenge Tracking</title>
    <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
  </head>
  <body>
      <div class="container-fluid">
      
      <div id="map-canvas" style="width:1400px;height:800px"></div>
    </div>

    @include('layouts.real');
   
   
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAqxO79s_5vqC4fTkONhcBm_-WS3A9G59o&callback=initialize"></script>
  </body>
</html>