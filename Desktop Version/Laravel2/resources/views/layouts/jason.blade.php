 <?php 
   $address="Road 5, Block C,Bashundhara r/a, Dhaka 1229";
    $data_arr = geocode($address);
 
    // if able to geocode the address
    if($data_arr){
         
        $latitude = $data_arr[0];
        $longitude = $data_arr[1];
        
        }
   ?>