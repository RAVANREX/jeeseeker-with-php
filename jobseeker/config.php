<?php 
$con=mysqli_connect("localhost","root","","project1");
session_start();
if(!isset($_SESSION['info']) && $_SESSION['info']==""){
	header('location:../login.php');
	} 
?>
