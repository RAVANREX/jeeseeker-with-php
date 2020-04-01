<?php require('config.php'); 


	$esans = $_POST['esans'];
	$eid = $_SESSION['info']['eid'];

	//  query to update data 
	 
	$re="UPDATE emp SET esans='$esans' WHERE eid='$eid'";
	$con->query($re);
	


?>
<?php $_SESSION['info']['esans'] = $esans; ?>