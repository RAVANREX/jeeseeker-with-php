<?php require('config.php'); 


	$esq = $_POST['esq'];
	$eid = $_SESSION['info']['eid'];

	//  query to update data 
	 
	$re="UPDATE emp SET esq='$esq' WHERE eid='$eid'";
	$con->query($re);
	


?>
<?php $_SESSION['info']['esq'] = $esq; ?>