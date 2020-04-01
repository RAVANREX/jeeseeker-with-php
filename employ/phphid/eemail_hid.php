<?php require('config.php'); 


	$eemail = $_POST['eemail'];
	$eid = $_SESSION['info']['eid'];

	//  query to update data 
	 
	$re="UPDATE emp SET eemail='$eemail' WHERE eid='$eid'";
	$con->query($re);
	


?>
<?php $_SESSION['info']['eemail'] = $eemail; ?>