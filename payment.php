<?php 
include('functions.php')?>
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
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,900,700,500);

body {
  padding: 60px 0;
  background-color: rgba(178,209,229,0.7);
  margin: 0 auto;
  width: 600px;
}
.body-text {
  padding: 0 20px 30px 20px;
  font-family: "Roboto";
  font-size: 1em;
  color: #333;
  text-align: center;
  line-height: 1.2em;
}
.form-container {
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.card-wrapper {
  background-color: #6FB7E9;
  width: 100%;
  display: flex;

}
.personal-information {
  background-color: #3C8DC5;
  color: #fff;
  padding: 1px 0;
  text-align: center;
}
h1 {
  font-size: 1.3em;
  font-family: "Roboto"
}
input {
  margin: 1px 0;
  padding-left: 3%;
  font-size: 14px;
}
input[type="text"]{
  display: block;
  height: 50px;
  width: 100%;
  border: none;
}
input[type="email"]{
  display: block;
  height: 50px;
  width: 100%;
  border: none;
}
input[type="submit"]{
  display: block;
  height: 60px;
  width: 100%;
  border: none;
  background-color: #3C8DC5;
  color: #fff;
  margin-top: 2px;
  curson: pointer;
  font-size: 0.9em;
  text-transform: uppercase;
  font-weight: bold;
  cursor: pointer;
}
input[type="submit"]:hover{
  background-color: #6FB7E9;
  transition: 0.3s ease;
}
#column-left {
  width: 49.5%;
  float: left;
  margin-bottom: 2px;
}
#column-right {
  width: 49.5%;
  float: right;
}

@media only screen and (max-width: 480px){
  body {
    width: 100%;
    margin: 0 auto;
  }
  .form-container {
    margin: 0 2%;
  }
  input {
    font-size: 1em;
  }
  #input-button {
    width: 100%;
  }
  #input-field {
    width: 96.5%;
  }
  h1 {
    font-size: 1.2em;
  }
  input {
    margin: 2px 0;
  }
  input[type="submit"]{
    height: 50px;
  }
  #column-left {
    width: 96.5%;
    display: block;
    float: none;
  }
  #column-right {
    width: 96.5%;
    display: block;
    float: none;
  }
}
  </style>
</head>
               <body >
    <!-- Header -->
    <div >
        <div class="container">
            <div class="row">
                <nav class="tm-nav fixed-top">
              <ul><li>  
                    <a href="#" class="col-lg-12 user"  >TOURISM AND TRAVEL GUIDE</a> </li>
                            <li><a href="home.php#" class="user1">Home</a></li>
                        <li><a href="home.php#tm-section-2" class="user1">Top Destinations</a></li>
                            <li><a href="home.php#tm-section-3" class="user1">Recommended Places</a></li>
                            <li><a href="home.php#tm-section-4" class="user1">Contact</a></li>
                               <li><a href="#" class="user1"><?php echo $_SESSION['username'];?></a></li>
                            <li><a href="index.php?logout='1'" class="user1">Logout</a></li></ul>
                   
                        </ul>
                    </nav>      
                </div>              
            </div>
        </div>      
 
 
<form method="POST" action="payment.php">
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> <!-- end of personal-information -->
  <?php echo display_error(); ?>
  <?php
                    if(!empty($_SESSION["shopping_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                    ?>
                 <input type="hidden" name="hidden_iid" value="<?php echo $values["i_id"]; ?>" />                               
                                <input type="hidden" name="hidden_tname" value="<?php echo $values["item_name"]; ?>" />
    
  <?php
}
}
?>
          <input id="column-left" type="text" name="first-name" placeholder="First Name"/>
          <input id="column-right" type="text" name="last-name" placeholder="Surname"/>
          <input id="input-field" type="text" name="number" placeholder="Card Number"/>
          <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
          <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
         
          <div class="card-wrapper"></div>
      
          <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address"/>
          <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/>
          <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
          <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
                    <input type="hidden" id="date"  name="date" value="<?php echo $_SESSION['tdate'];?>" />
          <input type="hidden" id="clat"  name="clat"/>
  <input type="hidden" id="clong" name="clong"/>
     <input type="hidden" id="clocation"  name="clocation"/>
          <input id="input-button" type="submit" name="order_btn" value="Submit"/>
        
    </form>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js"></script>   
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js"></script>
<script type="text/javascript">
  /* Card.js plugin by Jesse Pollak. https://github.com/jessepollak/card */

$('form').card({
    container: '.card-wrapper',
    width: 280,

    formSelectors: {
        nameInput: 'input[name="first-name"], input[name="last-name"]'
    }
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script> 
       
$(document).ready(function(){
    
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){

    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
$('#clat').val(latitude);
$('#clong').val(longitude);
    $.ajax({
        type:'POST',
        url:'getLocation.php',
    
        data:'latitude='+latitude+'&longitude='+longitude,
    
        success:function(msg){
            if(msg){
console.log(msg);    
               $('#clocation').val(msg);
             
            }else{

                $('#clocation').html('Not Available');
                         
            }
        }
    });

}
</script>
</body>
</html>