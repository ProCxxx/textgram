<?php
/*
if(strlen($_COOKIE['username'])>4){
  setcookie("username","xyza",time(),"/");
  header("Location: index.php");
}*/

$name=$_POST['name'];
$mail=$_POST['mail'];
$msg=$_POST['msg'];




$hostname = 'localhost';
$username = 'prox';
$password = 'cartown12';
$dbname = 'proxy';


$conn = mysqli_connect($hostname, $username, $password,$dbname);


if (!$conn) {
    die("Connection failed!");
}


$sql = "INSERT INTO `contact`(`id`, `name`, `mail`, `msg`) VALUES ('','".$name."','".$mail."','".$msg."')";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

echo '<script>window.location.replace("contact.html");</script>';

 ?>
