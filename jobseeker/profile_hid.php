<?php require('config.php'); 

$jid=$_SESSION['info']['jid'];

$jpic=time().$_FILES['jpic']['name'];
$buff=$_FILES['jpic']['tmp_name'];
move_uploaded_file($buf, "profile_pic/".$jpic);

$jresume=time().$_FILES['jresume']['name'];
$buff=$_FILES['jresume']['tmp_name'];
move_uploaded_file($buf, "resume/".$jresume);


$jname=$_POST['jname'];
$jemail=$_POST['jemail'];
$jpass=$_POST['jpass'];
$jsq=$_POST['jsq'];
$jsans=$_POST['jsans'];
$jphn=$_POST['jphn'];
$jdes=$_POST['jdes'];
$jgender=$_POST['jgender'];
$jskill=implode(",",$_POST['jskill'] );
$jdob=$_POST['jdob'];

$na="UPDATE jobseeker SET jpic='$jpic',jname='$jname',jemail='$jemail',jpass='$jpass',jsq='$jsq',jsans='$jsans',jphn='$jphn',jdes='$jdes',jgender='$jgender',jskill='$jskill',jresume='resume/$jresume',jdob='$jdob',jactive=1 WHERE jid='$jid'";
$con->query($na);

	
header('location:edit_profile.php');
?>