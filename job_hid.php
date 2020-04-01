<?php 
$con=mysqli_connect("localhost","root","","project1");

?>

<?php 

$jemail=$_POST['jemail'];
$jpass=$_POST['jpass'];
$na="INSERT INTO jobseeker SET jemail='$jemail',jpass='$jpass'";
$con->query($na);

	
header('location:login.php');
?>
