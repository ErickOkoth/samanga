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

<video width="320" height="240" controls>
    <source src="../video/v1.mp4" type="video/mp4">
    
</video>
<video width="320" height="240" controls>
    <source src="../video/v2.mp4" type="video/mp4">
    
</video>
<video width="320" height="240" controls>
    <source src="../video/v3.mp4" type="video/mp4">
    
</video>
<br><br>

  <div class="panel panel-info">
    <div class="panel-body"><h2>My music videos<h2></div>
  </div>
  

<video width="320" height="240" controls>
    <source src="../video/v4.mp4" type="video/mp4">
    
</video>
<video width="320" height="240" controls>
    <source src="../video/v5.mp4" type="video/mp4">
    
</video>
<video width="320" height="240" controls>
    <source src="../video/v6.mp4" type="video/mp4">
    
</video>
<video width="320" height="240" controls>
    <source src="../video/v7.mp4" type="video/mp4">
    
</video>



</body>
</html>