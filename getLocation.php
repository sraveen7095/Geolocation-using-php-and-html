<?php
//if latitude and longitude are submitted
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //send request and receive json data by latitude and longitude
    $url = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCRcy-FUErIBEk8jUxJPff9ADR8lxiTRR0&latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;

    
    //if request status is successful
    if($status == "OK"){
        //get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    
    //return address to ajax 
    echo $location;
}
?>