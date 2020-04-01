<?php require('config.php'); 

$eid=$_SESSION['info']['eid'];
if($_FILES['eclogo']['name']==""){
	$eclogo="../profile_pic/person.jpg";
}else{
$eclogo=time().$_FILES['eclogo']['name'];
$buff=$_FILES['eclogo']['tmp_name'];
move_uploaded_file($buf, "profile_pic/".$eclogo);
}
if($_FILES['eclogo']['name']==""){
	$epic="../profile_pic/person.jpg";
}else{
$epic=time().$_FILES['epic']['name'];
$buf=$_FILES['epic']['tmp_name'];
move_uploaded_file($buf, "profile_pic/".$epic);
}
$eclogo=$_POST['eclogo'];
$epic=$_POST['epic'];
$ecname=$_POST['ecname'];
$ename=$_POST['ename'];
$eemail=$_POST['eemail'];
$epass=$_POST['epass'];
$esq=$_POST['esq'];
$esans=$_POST['esans'];
$ephn=$_POST['ephn'];


$na="UPDATE emp SET eclogo='$eclogo',epic='$epic',ecname='$ecname',ename='$ename',eemail='$eemail',epass='$epass',esq='$esq',esans='$esans',ephn='$ephn' WHERE eid='$eid'";
$con->query($na);

	
header('location:edit_profile.php');
?>