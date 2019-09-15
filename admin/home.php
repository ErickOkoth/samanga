<!DOCTYPE html>
<html lang="en">
<head>
  <title>my web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php 
session_start();
require_once('../connection.php');
if(!isset($_SESSION['logged-in']) || $_SESSION['logged-in']!==true){
header('Location:../index.php');
exit;
}
?>
<?php
include('navbar.php');
?>

<div class="well well-lg-primary">
<div class="alert alert-info">
<h5><Strong><h2>Welcome To Samanga Lutheran High School</h2></Strong>
</div>
</div>

<div class="container">
  <h2>Rounded Corners</h2>
  <p>The .rounded class adds rounded corners to an image:</p>
  <?php            
 echo" <img src="image/pic.jpg" class="rounded" alt="Cinque Terre" width="304" height="236">; "
</div>
?>

</body>
</html>