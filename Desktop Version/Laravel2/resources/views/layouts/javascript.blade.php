  <?php 
   $address="Road 5, Block C,Bashundhara r/a, Dhaka 1229";
    $data_arr = geocode($address);
 
    // if able to geocode the address
    if($data_arr){
         
        $latitude = $data_arr[0];
        $longitude = $data_arr[1];
        
        }
   ?>

<script type="text/javascript">
	 // Note: This example requires consent to location sharing when
      // prompted by browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow, pos, lati, longi;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        infoWindow = new google.maps.InfoWindow;

        // HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
             
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            
            //infoWindow.open(map);
            map.setCenter(pos);


      var marker1 = new google.maps.Marker({
          position: pos,
          map: map
        });

     
     var marker2 = new google.maps.Marker({
          position: {lat: 23.816, lng: 90.426},
          map: map
        });

     var marker2 = new google.maps.Marker({
          position: {lat: 23.818, lng: 90.428},
          map: map
        });

     var marker2 = new google.maps.Marker({
          position: {lat: 23.819, lng: 90.429},
          map: map
        });

     var marker2 = new google.maps.Marker({
          position: {lat: 23.806, lng: 90.426},
          map: map
        });
     var marker2 = new google.maps.Marker({
          position: {lat: 23.816, lng: 90.416},
          map: map
        });


      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
          map: map
        });
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(position);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

</script>