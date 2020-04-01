<?php require('config.php'); 


	$ecname = $_POST['ecname'];
	$eid = $_SESSION['info']['eid'];

	//  query to update data 
	 
	$re="UPDATE emp SET ecname='$ecname' WHERE eid='$eid'";
	$con->query($re);
	


?>
<?php $_SESSION['info']['ecname'] = $ecname; ?>