<!DOCTYPE html>
<html lang="en">
<head>
  <title>my web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/pages.js"></script>
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

<div class="container">
 <div class="row">
 <div class="col-md-6 col-md-offset-3">
 <div class="panel panel-primary">
 <div class="panel-heading">New Student Registartion</div>
  <div class="panel-body">
<?php
require_once('../connection.php');
if(isset($_POST['submit'])){
 $form=$_POST['submit'];
$name=$_POST['nama'];
$regno=$_POST['regno'];

$phone=$_POST['phone'];


$sql="INSERT INTO student(nama,regno,phone)VALUES('$name','$regno','$phone')";
if ($conn->query($sql) === TRUE) {
echo "<div class='alert alert-success'>";
 echo " <strong> Success!.</strong> student registered successfully";
echo "</div>";
}
else{
echo "<div class='alert alert-danger'>";
 echo " <strong> Sorry!.</strong> student already registered or invalid information";
echo "</div>";
}
}
  ?>

  <form role="form" method="POST" action="addstudent.php" >
  <div class="form-group">
    <label for="email">Full Name:</label>
    <input type="text" class="form-control" name="nama" id="nama" required="required" placeholder="enter your full name">
  </div>
  <div class="form-group">
    <label for="pwd">Reg No:</label>
    <input type="text" class="form-control" name="regno" id="regno" required="required" placeholder="enter registration no">
  </div>

 
  <div class="form-group">
    <label for="pwd">Phone No:</label>
    <input type="number" class="form-control" name="phone" id="phone" required="required" placeholder="enter your phone no">
  </div>
  <button type="submit" name="submit" class="btn btn-info">Register</button>
</form>

  </div>
</div>
</div>
 </div> 
</div>
</body>
</html