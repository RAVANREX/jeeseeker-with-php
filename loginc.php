<?php require('config.php'); 
session_start();?>

<?php
$email=$_POST['email'];
$password=$_POST['password'];
$type=$_POST['type'];


if ($type=='jobseeker') {
	$src="SELECT * FROM `jobseeker` WHERE `jemail`='$email' AND `jpass`='$password'";
$rs=$con->query($src);
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	$rec=mysqli_fetch_assoc($rs);
	$_SESSION['info']=$rec;
	header('location:jobseeker/jobseeker.php');
	exit(1);
		
	
	

}else{
	header('location:login.php?msg=Invalid Email or password');
}
	
}
else{
$src="SELECT * FROM `emp` WHERE `eemail`='$email' AND `epass`='$password'";
$rs=$con->query($src);
if(mysqli_num_rows($rs)>0){
	$rec=mysqli_fetch_assoc($rs);
	$_SESSION['info']=$rec;
    header('location:employ/employ.php');
    exit(1);
	
	

}else{
	header('location:login.php?msg=Invalid Email or password');
}
}

?>


