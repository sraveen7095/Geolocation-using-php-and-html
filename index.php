<?php include('functions.php') ?>
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

   <link href="user/css/templatemo-style.css" rel="stylesheet">

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      <style>

.user{
    font-size: 18px;
    font-weight: bold;
    margin-right:300px;
    margin-left:20px;
}
.user1{
    font-size: 14px;
    font-weight: bold;
}
      @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
	margin:0;
	padding: 0; 
	font-family: sans-serif;
	background: #000
}
header{
	background: url(https://www.shantnews.am/wp-content/uploads/2018/11/nastol.com_.ua-242348.jpg) no-repeat top center / cover;
	height: 100vh;
	opacity: 0.3;
}
.login-box{
	width: 280px;
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	color: #fff
}	
.login-box h1{
	float: left;
	font-size: 40px;
	
	margin-bottom: 40px;
	padding: 13px 0;
}
.text-box{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	

}
.text-box i{
	width: 26px;
	float: left;
	text-align: center;
}
.text-box input{
	border: none;
	outline: none;
	background: none;
	color:#fff;
	font-size: 18px;
	width: 80%;
	float: left;
	margin: 0 10px; 
}
.btn{
	outline: none;
	width: 100%;
	background: none;
	border: none; 
	color: #fff;
	padding: 5px ;
	font-size: 18px;
	cursor: pointer;
}
.span1{
	position: absolute;
    top:100px;
    left:0;
    width:109px;
    height: 6px;
    background: linear-gradient(to right ,#0c002b, #008000);
}
.span2{
	position: absolute;
    top:170px;
    left:0;
    width:100%;
    height: 3px;
    background: linear-gradient(to right ,#0c002b, #008000);
}
.span3{
	position: absolute;
    top:218px;
    left:0;
    width:100%;
    height: 3px;
    background: linear-gradient(to right ,#0c002b, #008000);
}

.btn-box{
	margin-top: 15px;
	position: relative;
	overflow: hidden;
	width: 100%;
	height: 40px;
	
}
.btn{
	position: absolute;
	width: 100%;
	padding: 10px;

}
.span_1{
	position: absolute;
    top:0;
    right:0;
    width:100%;
    height: 3px;
    background: linear-gradient(to right ,#0c002b, #008000);
      animation: anim1 2s linear infinite;
}
.span_2{
	position: absolute;
    bottom:0;
    right:0;
    width:3px;
    height: 100%;
    background: linear-gradient(to bottom ,#0c002b, #008000);
      animation: anim2 2s linear infinite;
}
.span_3{
	position: absolute;
   	bottom:0;
    left:0;
    width:100%;
    height: 3px;
    background: linear-gradient(to left,#0c002b, #008000);
      animation: anim3 2s linear infinite;
}
.span_4{
	position: absolute;
   	top:0;
    left:0;
    width:3px;
    height: 100%;
    background: linear-gradient(to top ,#0c002b, #008000);
    animation: anim4 2s linear infinite;
}
@keyframes anim1 {
    0%{
        transform: translateX(-100%);
    }
    100%{
        transform: translateX(100%);
    }
}
@keyframes anim2 {
    0%{
        transform: translateY(-100%);
    }
    100%{
        transform: translateY(100%);
    }
}
@keyframes anim3 {
    0%{
        transform: translateX(100%);
    }
    100%{
        transform: translateX(-100%);
    }
}
@keyframes anim4 {
    0%{
        transform: translateY(100%);
    }
    100%{
        transform: translateY(-100%);
    }
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
</li>
                        
                            <li><a href="#" class="user1">Home</a></li>
                        <li><a href="#" class="user1">Top Destinations</a></li>
                            <li><a href="#" class="user1">Recommended Places</a></li>
                            <li><a href="#" class="user1">Contact</a></li>
                            <li><a href="index.php" class="user1" >Login</a></li>
                        </ul>
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
                                </div>    
                            </div>  <!-- col-xs-12 -->                      
                        </div> <!-- row -->
                        <div class="row tm-banner-row" id="tm-section-search">

      <!--login-->
      <form method="post" class="login-form" action="index.php">
      <div class="login-box" style="margin-top:100px;">
		<h1>Login
			<span class="span1"></span></h1>
		<?php echo display_error(); ?>
			<div class="text-box">
				<i class="fa fa-user"></i>
    <input type="text"  name="username" placeholder="Username" >
				<span class="span2"></span>
			</div>
			<div class="text-box">
				<i class="fa fa-lock"></i>
        <input type="password"  name="password" placeholder="Password">
				<span class="span3"></span>
 			</div>
			<div class="btn-box">
			   <button class="btn "  name="login_btn" type="submit">Login</button>
				<span class="span_1"></span>
				<span class="span_2"></span>
				<span class="span_3"></span>
				<span class="span_4"></span>	
			</div>
		<p>
        Not yet a member? <a href="registration.php">Sign up</a>
    </p>
	</div>

</form>
      </div> <!-- row -->
                        <div class="tm-banner-overlay"></div>
                    </div>  <!-- .container -->                   
                </div>     <!-- .tm-container-outer -->                 
            </section>
    <!---->
           </div>
    </div> <!-- .main-content -->

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/jquery.scrollTo.min.js"></script>           <!-- https://github.com/flesler/jquery.scrollTo -->
             

</body>
</html>