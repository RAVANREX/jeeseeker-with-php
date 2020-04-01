

<?php 
require "config.php";
$ecname=$_POST['ecname'];
$ename=$_POST['ename'];
$eemail=$_POST['eemail'];
$epass=$_POST['epass'];
$edob=$_POST['edob'];
$post=$_POST['post'];
$esq=$_POST['esq'];
$esans=$_POST['esans'];
$ephn=$_POST['ephn'];


$na="INSERT INTO emp SET ecname='$ecname',ename='$ename',eemail='$eemail',epass='$epass',esq='$esq',esans='$esans',ephn='$ephn',eactive=1";
$con->query($na);

	
header('location:login.php');
?>