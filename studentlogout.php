<?php 
session_start();
if(isset($_SESSION['logged-in'])){
    unset($_SESSION['logged-n']);
}
header('Location../index.php');
?>