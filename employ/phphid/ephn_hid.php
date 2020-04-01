<?php require('config.php'); 


	$ephn = $_POST['ephn'];
	$eid = $_SESSION['info']['eid'];

	//  query to update data 
	 
	$re="UPDATE emp SET ephn='$ephn' WHERE eid='$eid'";
	$con->query($re);
	


?>
<?php $_SESSION['info']['ephn'] = $ephn; ?>