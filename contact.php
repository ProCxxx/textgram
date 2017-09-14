<?php
/*
if(strlen($_COOKIE['username'])>4){
  setcookie("username","xyza",time(),"/");
  header("Location: index.php");
}*/

$name=$_POST['name'];
$mail=$_POST['mail'];
$msg=$_POST['msg'];
$ret=$_POST['ret'];



$servername = "localhost";
$username = "id1115136_proxy12";
$password = "cartown12";
$dbname = "id1115136_chatuser";


$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
    die("Connection failed!");
}


$sql = "INSERT INTO `contact`(`id`, `name`, `mail`, `msg`) VALUES (,$name,$mail,$msg);
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

  header("Location: $ret");

 ?>
