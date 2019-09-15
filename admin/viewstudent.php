<!DOCTYPE html>
<html lang="en">
<head>
  <title>my web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link href="../css/file.css" rel="stylesheet" type="text/css">
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
<?php
include_once"../connection.php";
if(isset($_POST['update'])){	
  $regno=$_POST['regno'];
  $nama=$_POST['nama'];
  $phone=$_POST['phone'];
  $sql = "UPDATE student SET nama='$nama',regno='$regno',phone='$phone' WHERE regno='$regno' ";
  if ($conn->query($sql) === TRUE) {
      echo "<div class='alert alert-success'>";
      echo " <strong> Success!.</strong> Information updated!!";
     echo "</div>";
  }else{
  echo "<div class='alert alert-danger'>";
   echo " <strong> Sorry!.</strong> Cannot update information!!";
  echo "</div>";
  }
  }
  if(isset($_POST['delete'])){	
    $idno=$_POST['regno'];
    $sql = "DELETE FROM student WHERE regno='$regno'";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>";
        echo " <strong> Success!.</strong> Student deleted successfully!!";
       echo "</div>"; 
    }
    else{
    echo "<div class='alert alert-danger'>";
     echo " <strong> Sorry!.</strong> Cannot delete member,try later";
    echo "</div>";
    }
    }

?>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
<div class="table-responsive">
<table width="100%" class=" table table-bordered table-responsive table-hover table-striped" id="table">
    <thead >
      <tr>
	  <th>Reg No.</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
$sql="select * from student";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["regno"]."</td>";
    echo "<td>".$row["nama"]."</td>";
    echo "<td>".$row["phone"]."</td>";
    
    echo "<td><a href='#' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal1'>Edit</a></td> ";
    echo "</tr>";
}
?>
    </tbody>
    </table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
   var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
						  document.getElementById("idno").value = this.cells[0].innerHTML;
                         document.getElementById("name").value = this.cells[1].innerHTML;
                         document.getElementById("phone").value = this.cells[2].innerHTML;
                    };
                }
  </script>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Me</h4>
      </div>
      <div class="modal-body">
       
	    <form role="form"  method="post" action="viewstudent.php">
		 <div class="form-group">
    <label for="email">REGNO:</label>
    <input type="text" class="form-control" name="regno" id="regno" >
  </div>
  <div class="form-group">
    <label for="email">NAME:</label>
    <input type="text" class="form-control" name="nama" id="nama" >
  </div>
  <div class="form-group">
    <label for="pwd">PHONE NO</label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>
  <input type="submit" name="update" value="Update" class="btn btn-success ">
  <input type="submit" name="delete" value="Delete" class="btn btn-danger ">
</form>
	   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</body>
</html>