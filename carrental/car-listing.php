<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal | Car Listing</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  

<!--Header--> 
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Car Listing</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Car Listing</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<div style="text-align: center;">
  <form method="GET" action="" name="form" style="display: inline-block; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    <label for="username" style="display: block; margin-bottom: 5px;">Search for a car:</label>
    <input type="text" name="username" id="username" style="padding: 5px; font-size: 16px; border-radius: 3px; border: 1px solid #ccc; box-shadow: none;">
    <button type="submit" name="submit" style="background-color: #FF0000; color: white; padding: 8px 12px; border: none; border-radius: 3px; cursor: pointer; font-size: 16px; margin-left: 10px;">Search</button>
  </form>
<?php
$cars= array("audi","bugatti","bmw","polo gt");
if(isset($_GET["username"])){
  $username = $_GET["username"];
  $found=false;
  foreach($cars as $a){
      if($a == $username){
         $found = true;
         break;
    }
  }
  if($found) {
    echo $username . " is availabe";
    $color="green";
  } else {
    echo $username . " is not avilable,Please contact the dealer";
    $color="green";
  }
} 
      
?>
<style>
  .car-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .car-item {
    margin: 78px;
  }
  .car-image {
    width: 300px;
    height: 200px;
    object-fit: cover;
  }
.car-name {
    margin-top: 5px;
    font-size: 16px;
    font-weight: bold;
  }
</style>
<div class="car-gallery">
  <div class="car-item">
    <img src="https://hypercar1.s3.amazonaws.com/lykan.jpg" alt="Car 1" class="car-image">
    <div class="car-name">PRINCES,LYKAN HYPERSPORT</div>
  </div>
  <div class="car-item">
    <img src="https://hypercar1.s3.amazonaws.com/bonds.jpg" alt="Car 2" class="car-image">
    <div class="car-name">BONDS,DBS</div>
  </div>
  <div class="car-item">
    <img src="https://hypercar1.s3.amazonaws.com/manny.jpg" alt="Car 3" class="car-image">
    <div class="car-name">MANNYS,CHIRON</div>
  </div>
  <!-- Add more car items here -->
</div>

</div>
</body>
</html><!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
