<?php session_start(); ?>
<?php 

$user="";

if(isset($_SESSION["user"])){
$user=$_SESSION["user"];
}




?>

<!DOCTYPE html>
<html>
<title>Travel-Diaries</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"crossorigin="anonymous"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/webmaster.css">
<link rel="stylesheet" href="./css/style-signup.css">
<link rel="stylesheet" href="./css/style1.css">
<link rel="stylesheet" href="./css/blogs.css">
<link rel="stylesheet" href="./css/style-form.css">

<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
  <h1 class="w3-xlarge">Travel Diaries</h1>
  <h1>Share Us Your experiences </h1>
  
  <div class="w3-padding-32">
    <div class="w3-bar w3-border" style="font-size: x-large">
      <a href="about.php" class="w3-bar-item w3-button">About</a>
      <?php if(empty($user)){ ?>
      <a href="signup.php" class="w3-bar-item w3-button ">Sign-up</a>
      <a href="login.php" class="w3-bar-item w3-button">Log in</a>
      <?php } else{ ?>
      <a href="myblogs.php" class="w3-bar-item w3-button ">My Blogs</a>
      <a href="./includes/logout.inc.php" class="w3-bar-item w3-button">Log out</a>
      <?php } ?>
      <a href="blog.php" class="w3-bar-item w3-button ">Blogs</a>
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small">Home</a>
      
    </div>
  </div>
</header>



