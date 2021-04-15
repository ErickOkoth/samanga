<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="studentlogin.php" style="color:blue;">Samanga Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Students
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="viewstudent.php">View Students</a></li>
          <li><a href="video.php">View My Videos</a></li>

        </ul>
      </li>
     >
    </ul>
   
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>
      <?php
      $nama=$_SESSION['nama'];
      echo $nama;
      ?>
      </a></li>
      <li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>



</nav> 