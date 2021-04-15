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
include('navbarr.php');
?>

<div class="well well-lg-primary">
<div class="alert alert-info">
<h5><Strong><h1>Welcome To Samanga Lutheran High School</h1></Strong>
</div>
</div>

<img src="/images/image1.jpg" alt="My School" style="width:100% ">
<div class="well well-lg-primary">
<div class="alert alert-info">
<h5><Strong><h1>Welcome To Samanga Lutheran High School</h1></Strong>
</div>
</div>
<img src="/images/imagep.jpg" alt="My School" style="width:100% ">
    </form>


<center>HELLOW WORLD</center>



</body>
</html>