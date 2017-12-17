 <?php 


$dbhost= "localhost";
$dbuser= "root";
$dbname="homeauto";
$dbpassword="16121971";

$connection= mysqli_connect($dbhost,$dbuser, $dbpassword, $dbname);
if(mysqli_connect_errno()){
    
    die("database connection failed: ".
         mysqli_connect_error(). "(".

        mysqli_connect_errno().")"       
    );
}

 /* 
Takes the longitude and latitude of the apartment
and dispalys it on the google map
 */

       for($i=1; $i<6; $i++)
       {  $lat= array();
          $lang= array();
        $lat[1]= "SELECT latitude FROM map_latitude WHERE map_id=1";
        $lang[1]= "SELECT longitude FROM map_longitude WHERE map_id=1";

       }

      

/* function to geocode address, it will return false if unable to geocode address
encodes json responses to php and stores latitude and longitude in a php array
*/
function geocode($address){
 
    // url encode the address
    $address = urlencode($address);
     
    // google map geocode api url
    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";
 
    // get the json response
    $resp_json = file_get_contents($url);
     
    // decode the json
    $resp = json_decode($resp_json, true);
 
    // response status will be 'OK', if able to geocode given address 
    if($resp['status']=='OK'){
 
        // get the important data
        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
       

        
         
        // verify if data is complete
        if($lati && $longi){
         
            // put the data in the array
            $data_arr = array();            
             
            array_push(
                $data_arr, 
                    $lati, 
                    $longi 
                    
                );
             
            return $data_arr;
             
        }else{
            return false;
        }
         
    }else{
        return false;
    }
}
?>