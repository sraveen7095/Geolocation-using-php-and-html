<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'mini10');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 
//session

if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["tid"], $item_array_id))
    {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id'     =>  $_GET["tid"],
                'i_id'     =>  $_POST["hidden_tid"],
                'from_loc' => $_POST["fromlocation"],
        'item_name'     =>  $_POST["hidden_name"],
        'item_price'    =>  $_POST["hidden_price"]
            );
      $_SESSION["shopping_cart"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("Item Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
      'item_id'     =>  $_GET["tid"],
       'i_id'     =>  $_POST["hidden_tid"],
                       'from_loc' => $_POST["fromlocation"],
      'item_name'     =>  $_POST["hidden_name"],
      'item_price'    =>  $_POST["hidden_price"],
                    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
      if($values["item_id"] == $_GET["tid"])
      {
        unset($_SESSION["shopping_cart"][$keys]);
        // echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="checkout.php"</script>';
      }
    }
  }
}
// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
   $location       =  e($_POST['location']);
   $lat       =  e($_POST['lat']);
      $long       =  e($_POST['long']);
	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
$password =  $password_1;//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password,Latitude,Longitude,location) 
					  VALUES('$username', '$email', '$user_type', '$password','$lat','$long','$location')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password,Latitude,Longitude,location) 
					  VALUES('$username', '$email', 'user', '$password','$lat','$long','$location')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['username'] = $username;
			header('location: home.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	
$email=$_POST['username'];
$pass= $_POST['password'];
	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Username is required");
	}
	if (empty($pass)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
$password =  $pass;		
		$query = "SELECT username,user_type FROM users WHERE username='$email' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['username'] = $username;
				header('location: admin/index.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['username']  = $username;

				header('location: home.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

//tour date
if (isset($_POST['checkout'])) {
	checkout();
}
function checkout(){
		global $db, $errors, $username;

    $tourdate = e($_POST['date']);
    
	if (empty($tourdate)) { 
		array_push($errors, "date is required"); 
	}
if (count($errors) == 0) {

				$_SESSION['tdate'] = $tourdate;
			}
	
}
//Tour details
if (isset($_POST['order_btn'])) {
	order();
}

//order

// REGISTER USER
function order(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username;

	// receive all input values from the form. Call the e() function
    // // defined below to escape form values
    $tourid = e($_POST['hidden_iid']);
    $tourname = e($_POST['hidden_tname']);
	$firstname    =  e($_POST['first-name']);
	$lastname       =  e($_POST['last-name']);
	$addr  =  e($_POST['streetaddress']);
	$city  =  e($_POST['city']);
	$zip  =  e($_POST['zipcode']);
$location       =  e($_POST['clocation']);
   $lat       =  e($_POST['clat']);
      $long       =  e($_POST['clong']);
	$tdate = e($_POST['date']);
	// form validation: ensure that the form is correctly filled
	if (empty($firstname)) { 
		array_push($errors, "firstname is required"); 
	}
	if (empty($lastname)) { 
		array_push($errors, "lastname is required"); 
	}
	if (empty($addr)) { 
		array_push($errors, "address is required"); 
	}
	if (empty($city)) {
		array_push($errors, "city is required");
	}
	if (empty($zip)) {
		array_push($errors, "zipcode is required");
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		

			$query = "INSERT INTO details (tourid,tourname,firstname, lastname, address, city,zipcode,clat,clong,clocation,tdate) 
					  VALUES('$tourid','$tourname','$firstname', '$lastname','$addr', 'city', '$zip','$lat','$long',
					  '$location','$tdate')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: thank.php');
		}
	}
//upload tour
if(isset($_POST['upload'])) {

    //Process the image that is uploaded by the user

   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$toid    =  e($_POST['toid']);
	$toname       =  e($_POST['toname']);
	$price  =  e($_POST['price']);
	
    //storind the data in your database
    $query = "INSERT INTO tbl_tours (name,image,price,tid ) 
					  VALUES('$toname','$toid','$price','$file')";
			mysqli_query($db, $query);
    header( "Refresh:3,url=admin/index.php", true, 303);
}


if(isset($_POST['formsubmit'])) {

    //Process the image that is uploaded by the user
	$contact_name    =  e($_POST['contact_name']);
 	$contact_email    =  e($_POST['contact_email']);
	$contact_subject       =  e($_POST['contact_subject']);
	$contact_message  =  e($_POST['contact_message']);
$location       =  e($_POST['clocation1']);
   $lat       =  e($_POST['clat1']);
      $long       =  e($_POST['clong1']);
	
    //storind the data in your database
    $query = "INSERT INTO complaints (cname,cemail,csubject,cmessage,clat1,clong1,clocation1 ) 
					  VALUES('$contact_name','$contact_email','$contact_subject','$contact_message','$lat'
					  ,'$long','$location')";
			mysqli_query($db, $query);
    header( "home.php", true, 303);
}

//session desttroy
if(isset($_POST['thank']))
{ 
session_destroy();
}