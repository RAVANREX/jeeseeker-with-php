<?php require('config.php'); 


	$ename = $_POST['ename'];
	$eid = $_SESSION['info']['eid'];

	//  query to update data 
	 
	$re="UPDATE emp SET ename='$ename' WHERE eid='$eid'";
	$con->query($re);
	


?>
<?php $_SESSION['info']['ename'] = $ename; ?>