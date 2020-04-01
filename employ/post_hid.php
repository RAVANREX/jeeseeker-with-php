
<?php require('config.php'); 
$eid=$_SESSION['info']['eid'];
$exp=$_POST['exp'];
$pdate=$_POST['pdate'];
$ldate=$_POST['ldate'];
$place=$_POST['place'];
$title=$_POST['title'];
$pin=$_POST['pin'];
$salary_from=$_POST['salary_from'];
$salary_to=$_POST['salary_to'];
$skill=implode(",", $_POST['skill']);
$ad=time().$_FILES['ad']['name'];
$buf=$_FILES['ad']['tmp_name'];
move_uploaded_file($buf, "post_job/".$ad);

$na="INSERT INTO post_job SET title='$title',place='$place',pin='$pin',eid='$eid',ad='post_job/$ad',skill='$skill',salary_from='$salary_from',salary_to='$salary_to',exp='$exp',pdate='$pdate',ldate='$ldate',noap=0";
$con->query($na);

	
header('location:applications.php');

?>