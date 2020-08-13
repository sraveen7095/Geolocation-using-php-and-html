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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">         
     <link href="user/css/templatemo-style.css" rel="stylesheet">
                          <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
<style type="text/css">
  .tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
        /*animate*/
.view {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  -webkit-perspective: 400;
          perspective: 400;
}

.plane {
  width: 120px;
  height: 120px;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}
.plane.main {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  -webkit-transform: rotateX(60deg) rotateZ(-30deg);
          transform: rotateX(60deg) rotateZ(-30deg);
  -webkit-animation: rotate 10s infinite linear;
          animation: rotate 10s infinite linear;
}
.plane.main .circle {
  width: 120px;
  height: 120px;
  position: absolute;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  border-radius: 100%;
  box-sizing: border-box;
  box-shadow: 0 0 60px crimson, inset 0 0 60px crimson;
}
.plane.main .circle::before, .plane.main .circle::after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  width: 10%;
  height: 10%;
  border-radius: 100%;
  background: crimson;
  box-sizing: border-box;
  box-shadow: 0 0 60px 2px crimson;
}
.plane.main .circle::before {
  -webkit-transform: translateZ(-90px);
          transform: translateZ(-90px);
}
.plane.main .circle::after {
  -webkit-transform: translateZ(90px);
          transform: translateZ(90px);
}
.plane.main .circle:nth-child(1) {
  -webkit-transform: rotateZ(72deg) rotateX(63.435deg);
          transform: rotateZ(72deg) rotateX(63.435deg);
}
.plane.main .circle:nth-child(2) {
  -webkit-transform: rotateZ(144deg) rotateX(63.435deg);
          transform: rotateZ(144deg) rotateX(63.435deg);
}
.plane.main .circle:nth-child(3) {
  -webkit-transform: rotateZ(216deg) rotateX(63.435deg);
          transform: rotateZ(216deg) rotateX(63.435deg);
}
.plane.main .circle:nth-child(4) {
  -webkit-transform: rotateZ(288deg) rotateX(63.435deg);
          transform: rotateZ(288deg) rotateX(63.435deg);
}
.plane.main .circle:nth-child(5) {
  -webkit-transform: rotateZ(360deg) rotateX(63.435deg);
          transform: rotateZ(360deg) rotateX(63.435deg);
}

@-webkit-keyframes rotate {
  0% {
    -webkit-transform: rotateX(0) rotateY(0) rotateZ(0);
            transform: rotateX(0) rotateY(0) rotateZ(0);
  }
  100% {
    -webkit-transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
            transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
  }
}

@keyframes rotate {
  0% {
    -webkit-transform: rotateX(0) rotateY(0) rotateZ(0);
            transform: rotateX(0) rotateY(0) rotateZ(0);
  }
  100% {
    -webkit-transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
            transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
  }
}

    /*animate*/
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

@import "compass/css3";
/* I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things... Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned. */
/* Global settings */
/* Global "table" column settings */
 .product-image {
     float: left;
     width: 20%;
}
 .product-details {
     float: left;
     width: 10%;
}
 
 .product-date {
     float: left;
     width: 10%;
}
 
 .product-date1 {
     float: left;
     width: 10%;
}
 .product-price {
     float: left;
     width: 12%;
}
 .product-quantity {
     float: left;
     width: 10%;
}
 .product-removal {
     float: left;
     width: 9%;
}
 .product-line-price {
     float: left;
     width: 12%;
     text-align: right;
}
/* This is used as the traditional .clearfix class */
 .group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before, .group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
     content: '';
     display: table;
}
 .group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
     clear: both;
}
 .group, .shopping-cart, .column-labels, .product, .totals-item {
     zoom: 1;
}
/* Apply clearfix in a few places */
/* Apply dollar signs */
 .product .product-price:before, .product .product-line-price:before, .totals-value:before {
     content: 'Rs.';
}
/* Body/Header stuff */
 body {
     padding: 0px 30px 30px 20px;
     font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
     font-weight: 100;
}
 h1 {
     font-weight: 100;
}
 label {
     color: #aaa;
}
 .shopping-cart {
     margin-top: -45px;
}
/* Column headers */
 .column-labels label {
     padding-bottom: 15px;
     margin-bottom: 15px;
     border-bottom: 1px solid #eee;
}
 .column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
     text-indent: -9999px;
}
/* Product entries */
 .product {
     margin-bottom: 20px;
     padding-bottom: 10px;
     border-bottom: 1px solid #eee;
}
 .product .product-image {
     text-align: center;
}
 .product .product-image img {
     width: 100px;
}
 .product .product-details .product-title {
     margin-right: 20px;
     font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
}
 .product .product-details .product-description {
     margin: 5px 20px 5px 0;
     line-height: 1.4em;
}
 .product .product-quantity input {
     width: 40px;
}
 .product .remove-product {
     border: 0;
     padding: 4px 8px;
     background-color: #c66;
     color: #fff;
     font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
     font-size: 12px;
     border-radius: 3px;
}
 .product .remove-product:hover {
     background-color: #a44;
}
/* Totals section */
 .totals .totals-item {
     float: right;
     clear: both;
     width: 100%;
     margin-bottom: 10px;
}
 .totals .totals-item label {
     float: left;
     clear: both;
     width: 79%;
     text-align: right;
}
 .totals .totals-item .totals-value {
     float: right;
     width: 21%;
     text-align: right;
}
 .totals .totals-item-total {
     font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
}
 .checkout {
     float: right;
     border: 0;
     margin-top: 20px;
     padding: 6px 25px;
     background-color: #6b6;
     color: #fff;
     font-size: 25px;
     border-radius: 3px;
}
 .checkout:hover {
     background-color: #494;
}
/* Make adjustments for tablet */
 @media screen and (max-width: 650px) {
     .shopping-cart {
         margin: 0;
         padding-top: 20px;
         border-top: 1px solid #eee;
    }
     .column-labels {
         display: none;
    }
     .product-image {
         float: right;
         width: auto;
    }
     .product-image img {
         margin: 0 0 10px 10px;
    }
     .product-details {
         float: none;
         margin-bottom: 10px;
         width: auto;
    }
     .product-price {
         clear: both;
         width: 70px;
    }
     .product-quantity {
         width: 100px;
    }
     .product-quantity input {
         margin-left: 20px;
    }
     .product-quantity:before {
         content: 'x';
    }
     .product-removal {
         width: auto;
    }
     .product-line-price {
         float: right;
         width: 70px;
    }
}
/* Make more adjustments for phone */
 @media screen and (max-width: 350px) {
     .product-removal {
         float: right;
    }
     .product-line-price {
         float: right;
         clear: left;
         width: auto;
         margin-top: 10px;
    }
     .product .product-line-price:before {
         content: 'Item Total: Rs.';
    }
     .totals .totals-item label {
         width: 60%;
    }
     .totals .totals-item .totals-value {
         width: 40%;
    }
}
 
</style>
      </head>

              <body style="background-color: white;">
    <!-- Header -->
    <div>
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
                           <li><a href="#" class="user1"><?php echo $_SESSION['username'];?></a></li>
                            <li><a href="index.php?logout='1'" class="user1">Logout</a></li></ul>
                   
                        </ul>
                    </nav>      
                </div>              
            </div>
        </div>      
 
    
 <!-- container --!-- .tm-top-bar -->

<div class="shopping-cart"  style="margin-top: 10%;">
 <form method="post" class="login-form" action="payment.php">
  <div class="column-labels">
 <label class="product-date">Tour Date</label>
    <label class="product-date1">Tour</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Members</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <div class="product">
    <div class="product-date">
      
        <input type="date" name="date" id="date" class="form-control" />
            
    </div>
<?php
                    if(!empty($_SESSION["shopping_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                    ?>
                    
    <div class="product-details">
      <div class="product-title"><?php echo $values["item_name"]; ?></div>
      
    </div>
    <div class="product-price"><?php echo $values["item_price"]; ?></div>
    <div class="product-quantity">
      <input type="number" value="0" min="0">
    </div>
    <div class="product-removal">
        <a href="checkout.php?action=delete&tid=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a>
     </div>
    <div class="product-line-price"><?php echo number_format( $values["item_price"], 2);?></div>
  <?php
}
}
  ?>
  </div>

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total" name="Grand">90.57</div>
    </div>
      
  </div>
           <input type="submit"  name="checkout" class="checkout" value="checkout" />
</form>
</div>
<!---->
      </div>
      <div class="col-md-4" style="margin-left: -10%;margin-top: 10%;">
  <div class="view">
  <div class="plane main">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  </div>
</div>
</div>

	<br /></div>
    </div> <!-- .main-content -->

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/jquery.scrollTo.min.js"></script>           <!-- https://github.com/flesler/jquery.scrollTo -->
    <script type="text/javascript">
        $(document).ready(function(){
getDate();    
});
function getDate(){
  var today = new Date();
  
  document.getElementById('date').value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) +'-' + ('0' + today.getDate()).slice(-2);
console.log(document.getElementById('date').value);
}




        /* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}
    </script>
    
  </script>             

</body>
</html>