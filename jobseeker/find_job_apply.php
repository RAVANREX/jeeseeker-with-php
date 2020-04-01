<?php 
require "config.php";

$pid=$_POST['pid'];
$eid=$_POST['eid'];
$jid=$_POST['jid'];









$ip="INSERT INTO application SET pid='$pid',eid='$eid',jid='$jid',ar=0;";


$rs=$con->query($ip);




echo "applied";




?>