<script type="text/javascript">
    
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
//taking geolocation of the user
function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&key=AIzaSyAqxO79s_5vqC4fTkONhcBm_-WS3A9G59o";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
//seraching for nearby apartments to show
function showImage() extends showPosition(position){

    double A[60]={90.426886,90.427239,90.428795,90.427443,90.429004,90.426633,90.431117,90.432662,90.439653,90.438490,90.426398,90.426076,90.427214,90.433971,90.429309,90.429578,90.427217,90.429906,90.429970,90.430346,90.428930,90.427235,90.433413,90.440951,90.428740,90.437932,90.440043,90.434056,90.434990,90.433370,90.433676,90.436199,90.432887,90.431793,90.425272,90.432355,90.434872,90.434872,90.429156,90.428415,90.440865,90.439574,90.436752,90.437117,90.433649,90.428587,90.429444,90.429766,90.427975,90.429330,90.427120,90.430474,90.429177,90.427067,90.434024,90.432168,90.435086,90.434636,90.435344,90.435922};
    double p=(position.coords.longitude+0.000010);
    double q=(position.coords.longitude-0.000010);

    for(int i=0;i<60;i++){

    if(p<A[i] !! q<A[i])
        showImage(url);
        
}   


}
</script>