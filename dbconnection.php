<?php
$host="localhost";
$user="root";
$password="";
$db_name="mandazisystem";
$con=mysqli_connect($host,$user,$password,$db_name);

if(mysqli_connect_errno()){
die("Failed to connect with mySQL:".mysqli_connect_error());
}
?>