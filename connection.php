<?php
//code for connection goes here

$host="localhost";
$username="root";
$password="";
$db="samangadb";
$conn=new mysqli($host,$username,$password,$db);
if($conn->connect_error){
    die("database connection failed" .$conn->conect_error);
    

}
?>