<!DOCTYPE html>
<html lang="en">


<head>
  <title>samanga website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default" style="color:red"><strong>Student Portal</strong>
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar navbar-expand-md na bg-dark navbar-dark" ><h3>SAMANGA LUTHERAN HIGH SCHOOL</h3></a>
    </div>
   
  </div>
  </nav>
</div>

 <div class="container">
 <div class="row">
 <div class="col-md-6 col-md-offset-3">
 <div class="panel panel-success">
 <div class="panel-heading">Student Login</div>
  <div class="panel-body">
<?php
require_once('connection.php');
session_start();

if(isset($_POST['submit'])){
  $form=$_POST['submit'];
  $name=$_POST['nama'];
  $regno=$_POST['regno'];
  $_SESSION['regno']=$_POST['regno'];
  if(isset($form)){
  if(isset($name)&& isset($regno)&& $name!=='' && $regno!==''){
  $sql="SELECT * FROM `student` WHERE regno='$regno' AND nama='$name'";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
  $_SESSION['nama']=$name;
  $_SESSION['logged-in']=true;
  header('Location:student/home.php');
  exit;
  }
  else
  {
  echo "<div class='alert alert-danger'>";
   echo "Invalid Username or Password";
  echo "</div>";
  }
  }
  else
  {
  echo "<div class='alert alert-danger'>";
   echo "Invalid Username or Password";
  echo "</div>";
  }
  }
  }

?>
  <form role="form" method="POST" action="studentlogin.php">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="nama" id="nama" required="required">
  </div>
  <div class="form-group">
    <label for="regno">Reg. No:</label>
    <input type="password" class="form-control" name="regno" id="regno" required="required">
  </div>
  <button type="submit" name="submit" class="btn btn-info">Login</button>
</form>

  </div>
</div>
</div>
 </div> 
</div>
</body>
</html>