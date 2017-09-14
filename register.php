<?php
/*
if(strlen($_COOKIE['username'])>4){
  setcookie("username","xyza",time(),"/");
  header("Location: index.php");
}*/

$user=$_POST['user'];
$name=$_POST['name'];
$pw=$_POST['pw'];
$pw2=$_POST['pw2'];
$mail=$_POST['mail'];

$servername = "localhost";
$username = "id1115136_proxy12";
$password = "cartown12";
$dbname = "id1115136_chatuser";


$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
    die("Connection failed!");
}


$sql = "SELECT `id`FROM `usernames` WHERE `username`=$user OR `mail`=$mail";
$result = mysqli_query($conn, $sql);

$sql="INSERT INTO `usernames`(`id`, `name`, `username`, `usernamehash`, `mail`, `password`) VALUES (,$name,$user,hash("md5",$user),$mail,$pw)";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

  header("Location: index.php");

 ?>
