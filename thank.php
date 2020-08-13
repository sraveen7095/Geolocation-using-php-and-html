<?php 
include ('functions.php')

?>
<!Doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Journey HTML CSS Template</title>
<!-- 
Journey Template 
http://www.templatemo.com/tm-511-journey
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
     <link href="user/css/templatemo-style.css" rel="stylesheet">
    
  <style type="text/css">
       .user{
    font-size: 18px;
    font-weight: bold;
    margin-right:200px;
    margin-left:20px;
}
.user1{
    font-size: 14px;
    font-weight: bold;
}
 
  </style>
</head>
               <body onload="calculateDistances();">
    <!-- Header -->
    <div>
    <div >
        <div class="container">
            <div class="row">
                <nav class="tm-nav fixed-top">
              <ul><li>  
                    <a href="#" class="col-lg-12 user"  >TOURISM AND TRAVEL GUIDE</a>   
</li>
                        
                            <li><a href="home.php#" class="user1">Home</a></li>
                        <li><a href="home.php#tm-section-2" class="user1">Top Destinations</a></li>
                            <li><a href="home.php#tm-section-3" class="user1">Recommended Places</a></li>
                            <li><a href="home.php#tm-section-4" class="user1">Contact</a></li>
                                <li><a href="home.php#" class="user1"><?php echo $_SESSION['username'];?></a></li>
                            <li><a href="index.php?logout='1'" class="user1">Logout</a></li></ul>
                   
                        </ul>
                    </nav>      
                </div>              
            </div>
        </div>      
 
 
<div class=" text-center" style="margin-top: 10%">

<form method="post" action="thank.php">

  <h1 class="display-3">Thank You!</h1>
<?php echo display_error(); ?>
  <?php
                    if(!empty($_SESSION["shopping_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                    ?>
                                 
      <input type="hidden" id="toloc" name="toloc" value="<?php echo $values["item_name"]; ?>" />
    

    <input type="hidden" id="fromloc"  name="clocation" value="<?php echo $values["from_loc"]; ?>"/>  
  
<p>Your Tour for <span style="color: blue;"> <?php echo $values["item_name"]; ?> </span> from <span style="color: blue;"> <?php echo $values["from_loc"]; ?> </span>is booked on <span style="color: red;"> <?php echo $_SESSION['tdate'];?></span></p> 
  <p class="lead"><strong>Please check your email</strong> for further instructions.</p>
  <hr>
  <?php
}
}
?>
  <p>
    Having trouble? <a href="home.php#tm-section-4">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="home.php" name="thank" role="submit">Return <span>Home</span></a>
  </p>
</form>
</div>
</div>

<!--  <script src="https://maps.googleapis.com/maps/api/distancematrix/json?origins=Boston,MA|Charlestown,MA&destinations=Lexington,MA|Concord,MA&departure_time=now&key=YOUR_API_KEY
key=AIzaSyCRcy-FUErIBEk8jUxJPff9ADR8lxiTRR0"></script> -->
<script> 
$(document).ready(function(){
calculateDistances();    
});

 function calculateDistances() {
  origin = document.getElementById('fromloc').value;
console.log(origin);
//Get the source string
  destination = document.getElementById('toloc').value; //Get the destination string
console.log(destination);
  var service = new google.maps.DistanceMatrixService(); //initialize the distance service
  service.getDistanceMatrix(
    {
      origins: [origin], //set origin, you can specify multiple sources here
      destinations: [destination],//set destination, you can specify multiple destinations here
      travelMode: google.maps.TravelMode.DRIVING, //set the travelmode
      unitSystem: google.maps.UnitSystem.METRIC,//The unit system to use when displaying distance
      avoidHighways: false,
      avoidTolls: false
    }, calcDistance); // here calcDistance is the call back function
}

function calcDistance(response, status) {
  if (status != google.maps.DistanceMatrixStatus.OK) { // check if there is valid result
    alert('Error was: ' + status);
  } else {
    var origins = response.originAddresses;
    var destinations = response.destinationAddresses;
    deleteOverlays();

    for (var i = 0; i < origins.length; i++) {
      var results = response.rows[i].elements;

      for (var j = 0; j < results.length; j++) {

        alert ('Distance from '+origins[i] + ' to ' + destinations[j]
            + ': ' + results[j].distance.text ); // alert the result
      }
    }
  }
}

</script>

</body>
</html>