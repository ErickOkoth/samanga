<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminlogin.php" style="color:blue;">Samanga Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Students
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addstudent.php">Add new Students</a></li>
          <li><a href="viewstudent.php">View Students</a></li>

        </ul>
      </li>
     >
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>
      <?php
      $username=$_SESSION['username'];
      echo $username;
      ?>
      </a></li>
      <li><a href="../adminlogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav> 