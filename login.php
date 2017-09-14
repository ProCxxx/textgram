<?php
/*
if(strlen($_COOKIE['username'])>4){
  setcookie("username","xyza",time(),"/");
  header("Location: index.php");
}*/

$user=$_POST['user'];
$pw=$_POST['pw'];

$servername = "localhost";
$username = "id1115136_proxy12";
$password = "cartown12";
$dbname = "id1115136_chatuser";


$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
    die("Connection failed!");
}


$sql = "SELECT `password`FROM `usernames` WHERE `username`=$user";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

  header("Location: index.php");

 ?>
