<?php require('config.php'); 

 $eclogo=time().$_FILES['eclogo']['eclogo'];
 $buf=$_FILES['eclogo']['tmp_name'];
 move_uploaded_file($buf, "../profile_pic".$eclogo);
	$eid = $_SESSION['info']['eid'];

	//  query to update data 
	 
	$re="UPDATE emp SET eclogo='profile_pic/$eclogo' WHERE eid='$eid'";
	$con->query($re);
	


?>
<?php 


$_SESSION['info']['eclogo'] = $eclogo; 
?>