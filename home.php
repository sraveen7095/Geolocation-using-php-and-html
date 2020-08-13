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
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
<!--user-->
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
 -->  <link href="user/css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          <style>
          .btn1 {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    color:white;
    font-weight:bold;
    font-size:16px;
    
}
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

      <body>
        <div class="tm-main-content" id="top">
              <div class="tm-gray-bg">
    <!-- Header -->
    <div class="tm-header">
        <div class="container">
            <div class="row">
                <nav class="tm-nav fixed-top">
              <ul><li>  
                    <a href="#" class="col-lg-12 user"  >TOURISM AND TRAVEL GUIDE</a>   
              <!--   </div> -->
                <!-- <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="mobile-menu-icon">
                      <i class="fa fa-bars"></i>
                    </div>
                   </div> --></li>
                        
                            <li><a href="home.php#" class="user1">Home</a></li>
                        <li><a href="#tm-section-2" class="user1">Top Destinations</a></li>
                            <li><a href="#tm-section-3" class="user1">Recommended Places</a></li>
                            <li><a href="#tm-section-4" class="user1">Contact</a></li>
                        <li><a href="#" class="user1"><?php echo $_SESSION['username'];?></a></li>
                            <li><a href="index.php?logout='1'" class="user1">Logout</a></li></ul>
                    </nav>      
                </div>              
            </div>
        </div>      
    </div>
    
 <!-- container -->
        </div> <!-- .tm-top-bar -->

        <div class="tm-page-wrap mx-auto">
            <section class="tm-banner">
                <div class="tm-container-outer tm-banner-bg">
                    <div class="container">

                        <div class="row tm-banner-row tm-banner-row-header">
                            <div class="col-xs-12">
                                <div class="tm-banner-header">
                                    <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                                    <img src="img/dots-3.png" alt="Dots">
                                    <p class="tm-banner-subtitle">We assist you to choose the best.</p>
                                    <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>       
                                </div>    
                            </div>  <!-- col-xs-12 -->                      
                        </div> <!-- row -->
                        <div class="row tm-banner-row" id="tm-section-search">


                                <div class="form-row tm-search-form-row">

                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                        <input name="check-in" type="hidden" class="form-control" id="inputCheckIn" placeholder="Check In">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                        <input name="check-out" type="hidden" class="form-control" id="inputCheckOut" placeholder="Check Out">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                    </div>
                                </div>                              
                            </form>                             
                        </div> <!-- row -->
                        <div class="tm-banner-overlay"></div>
                    </div>  <!-- .container -->                   
                </div>     <!-- .tm-container-outer -->                 
            </section>

            <section class="p-5 tm-container-outer tm-bg-gray">            
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                            <h2 class="text-uppercase mb-4">Your <strong>Journey</strong> is our priority</h2>
                            <p class="mb-4">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt mi metus quis lectus. Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>
                            <a href="login.php" class="text-uppercase btn-primary tm-btn">Continue explore</a>                              
                        </div>
                    </div>
                </div>            
            </section>
           
            <div class="tm-container-outer" id="tm-section-2">
            <section class="tm-slideshow-section">
            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TS01'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
		     

             <div class="tm-slideshow">
  
                    
                <img src="img/<?php echo $row["image"];?>" alt="Image">
                <img src="img/<?php echo $row["image"];?>" alt="Image">
                <img src="img/<?php echo $row["image"];?>" alt="Image">
                
        <?php
      
            }
        }
            ?>  
           
                   </div>     
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">Telangana's most visited places</h2>
                        <p>Aenean in lacus nec dolor fermentum congue. Maecenas ut velit pharetra, pharetra tortor sit amet, vulputate sem. Vestibulum mi nibh, faucibus ac eros id, sagittis tincidunt velit. Proin interdum ullamcorper faucibus. Ut mi nunc, sollicitudin non pulvinar id, sagittis eget diam.</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                </section>
           
  <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">
  <?php
				$query = "SELECT * FROM tbl_tours where tid = 'KS01'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
		   
                    <div class="tm-right tm-slideshow tm-slideshow-highlight">
                                 
                <img src="img/<?php echo $row["image"];?>" alt="Image">
                <img src="img/<?php echo $row["image"];?>" alt="Image">
                <img src="img/<?php echo $row["image"];?>" alt="Image">    
                    </div> 

             
        <?php
      
    }
}
    ?>  
          <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
                        <h2 class="">Kerala's most popular places</h2>
                        <p>Vivamus in massa ullamcorper nunc auctor accumsan ac at arcu. Donec sagittis mattis pharetra. Proin commodo, ante et volutpat pulvinar, arcu arcu ullamcorper diam, id maximus sem tellus id sem. Suspendisse eget rhoncus diam. Fusce urna elit, porta nec ullamcorper id.</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-highlight">Continue Reading</a>
                    </div>                        

                </section>
                <section class="tm-slideshow-section">
                <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GO01'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
		   

                    <div class="tm-slideshow">
                    <img src="img/<?php echo $row["image"];?>" alt="Image">
                <img src="img/<?php echo $row["image"];?>" alt="Image">
                <img src="img/<?php echo $row["image"];?>" alt="Image">    
                    </div>
                    <?php
      
    }
}
    ?>  

                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">Goa's most famous places</h2>
                        <p>Donec nec laoreet diam, at vehicula ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nec dapibus nunc, quis viverra metus. Morbi eget diam gravida, euismod magna vel, tempor urna.</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                </section>
            </div>        
            <div class="tm-container-outer" id="tm-section-3">
                <ul class="nav nav-pills tm-tabs-links">
                    <li class="tm-tab-link-li">
                        <a href="#1a" data-toggle="tab" class="tm-tab-link">
                        
                    <img src="img/telangana.gif" alt="Image"  class="img-fluid ">
 
                           
                            Telangana
                            </a>
                            </li>
                             <li class="tm-tab-link-li">
                        <a href="#2a" data-toggle="tab" class="tm-tab-link">
                        <img src="img/andhra.gif" alt="Image"  class="img-fluid ">    Andhra Pradesh
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#3a" data-toggle="tab" class="tm-tab-link">
                        <img src="img/goa.gif" alt="Image"  class="img-fluid ">        Goa
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#4a" data-toggle="tab" class="tm-tab-link active"><!-- Current Active Tab -->
                        <img src="img/gujarat.gif" alt="Image"  class="img-fluid ">
                            Gujarat
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#5a" data-toggle="tab" class="tm-tab-link">
                        <img src="img/kerala.gif" alt="Image"  class="img-fluid ">
                            Kerala
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#6a" data-toggle="tab" class="tm-tab-link">
                        <img src="img/tamil.gif" alt="Image"  class="img-fluid ">      Tamil nadu
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#7a" data-toggle="tab" class="tm-tab-link">
                        <img src="img/himachal.gif" alt="Image"  class="img-fluid ">
                            Himachal Pradesh
                        </a>
                    </li>
                </ul>
                <div class="tab-content clearfix">
                	
                    <!-- Tab 1 -->
                    <div class="tab-pane fade " id="1a">
                        <div class="tm-recommended-place-wrap ">
                    
                            <div class="tm-recommended-place ">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TS1'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>
                     

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TS2'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TS3'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TS4'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->
                    
                    <!-- Tab 2 -->
                    <div class="tab-pane fade" id="2a">

                    <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'AN1'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>
                     

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'AN2'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'AN3'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'AN4'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->          
                    
                    <!-- Tab 3 -->     
                    <div class="tab-pane fade" id="3a">

                    <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GO1'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>
                     

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GO2'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GO3'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GO4'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->
                    
                    <!-- Tab 4 -->
                    <div class="tab-pane fade show active" id="4a">
                    <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                    <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GU1'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>
                     

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GU2'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GU3'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'GU4'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->
                    
                    <!-- Tab 5 -->
                    <div class="tab-pane fade" id="5a">

                    <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'KA1'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>
                     

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'KA2'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'KA3'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'KA3'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->   
                    
                    <!-- Tab 6 -->            
                    <div class="tab-pane fade" id="6a">

                    <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TM1'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>
                     

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TM2'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TM3'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'TM4'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
      	<form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                   
                    </div> <!-- tab-pane -->
                    
                    <!-- Tab 7 -->
                    <div class="tab-pane fade" id="7a">

                    <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'HM1'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>
                     

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'HM2'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'HM3'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               <input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>

                            <div class="tm-recommended-place">
                            <?php
				$query = "SELECT * FROM tbl_tours where tid = 'HM4'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
							?>
                    
                    <form class="form-inline" method="post" action="checkout.php?action=add&tid=<?php echo $row["tid"]; ?>">
                             <img src="img/<?php echo $row["image"];?>" alt="Image" class="img-fluid tm-recommended-img">
                             <div class="tm-recommended-description-box" >
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight"><?php echo $row["name"]; ?></p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_tid" value="<?php echo $row["tid"]; ?>" />
<input type="hidden" id="clocation1"  name="fromlocation"/>
                                		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <a class="tm-recommended-price-box" name="add_to_cart">
                                    <p class="tm-recommended-price">Rs.<?php echo $row["price"]; ?></p>
                                    <input type="submit" name="add_to_cart"  value="Book Now" class="btn1"/>

                                </a>                 
                              </div>
     </form>
                                <?php
                    }
                }
                ?>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->
                </div>
            </div>

            <div class="tm-container-outer tm-position-relative" id="tm-section-4">
                <div id="google-map"></div>   
                             <form action="home.php" method="post" class="tm-contact-form" style="margin-top: -95px;height:325px;">
                    <h4>Feedback Form</h4>
                    <div class="form-group tm-name-container">
                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                    </div>
                    <div class="form-group tm-email-container">
                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                    </div>
                    <div class="form-group">
                        <textarea id="contact_message" name="contact_message" class="form-control" rows="2" placeholder="Message" required></textarea>
                    </div>
                              <input type="hidden" id="clat1"  name="clat1"/>
  <input type="hidden" id="clong1" name="clong1"/>
     <input type="hidden" id="clocation1"  name="clocation1"/>
                    <button type="submit" name="formsubmit" class="btn btn-primary tm-btn-primary tm-btn-send text-uppercase">Send Message Now</button>
                </form>
                </div>

            </div> <!-- .tm-container-outer -->
 </div>



            <footer style="margin-bottom:  -50px;">
                <p class="mb-0">Copyright © <span class="tm-current-year">2019</span> GNI 
                    
                . Designed by <span>ADOBE BATCH-1</span></p>
            </footer>
</body>     
 
       
   <!-- .main-content -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script> 
       
$(document).ready(function(){
    
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location1').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){

    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
$('#clat1').val(latitude);
$('#clong1').val(longitude);
    $.ajax({
        type:'POST',
        url:'getLocation.php',
    
        data:'latitude='+latitude+'&longitude='+longitude,
    
        success:function(msg){
            if(msg){
console.log(msg);    
               $('#clocation1').val(msg);
             
            }else{

                $('#clocation1').html('Not Available');
                         
            }
        }
    });

}
</script>

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/jquery.scrollTo.min.js"></script>           <!-- https://github.com/flesler/jquery.scrollTo -->
    <script> 
        /* Google Maps
        ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
         var mapOptions = {

                zoom: 16,
                center: new google.maps.LatLng(17.161261,78.658516),
 
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('google-map'),mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });

            google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCRcy-FUErIBEk8jUxJPff9ADR8lxiTRR0&' + 'callback=initialize';
            document.body.appendChild(script);
        } 

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            // Change top navbar on scroll
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 100) {
                    $(".tm-top-bar").addClass("active");
                } else {                    
                 $(".tm-top-bar").removeClass("active");
                }
            });

            // Smooth scroll to search form
            $('.tm-down-arrow-link').click(function(){
                $.scrollTo('#tm-section-search', 300, {easing:'linear'});
            });

            // Date Picker in Search form
            var pickerCheckIn = datepicker('#inputCheckIn');
            var pickerCheckOut = datepicker('#inputCheckOut');

            // Update nav links on scroll
            $('#tm-top-bar').singlePageNav({
                currentClass:'active',
                offset: 60
            });

            // Close navbar after clicked
            $('.nav-link').click(function(){
                $('#mainNav').removeClass('show');
            });

            // Slick Carousel
            $('.tm-slideshow').slick({
                infinite: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });

            loadGoogleMap();                                       // Google Map                
            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             
</html>