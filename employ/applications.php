<?php require('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require "../headlink.php"; ?>

</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<div><?php require "navemp.php"; ?></div>
  <div class="container">

<div class="row">
  <div class="col-6">
   <p> Applications</p>
   </div>
<div class="col-6">
<button style="position: absolute;right: 0px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mkModal">
  Open modal
</button>
</div>


</div>





	
   



<?php
$ip="SELECT application.pid,application.aid,application.eid,application.jid,post_job.pid,emp.eid,post_job.exp,jobseeeker.jid FROM (((application LEFT JOIN emp ON application.eid=emp.eid) LEFT JOIN jobseeeker ON application.jid=jobseeeker.jid )LEFT JOIN post_job ON application.pid=post_job.pid);";

$rs=$con->query($ip);
$l=$rs->num_rows;

echo $l;

if($rs->num_rows>0)
{
  while($row=$rs->fetch_assoc()){
    ?>



<div class="row">
	<div class="col-lg-4">
		<div class="card">
  <div class="card-header">
    <div class="row">
    <p>Sl No.<?php echo $i ;?></p>
    <p style="position: absolute;right: 0px;"> Post id.<?php echo '#'.$i ;?></p>
  </div>
  </div>
  <div class="card-body">
  	<div class="row">
  	<div class="col-6">
      <p>place:</p>
      <p>No. of application:</p>
      <p>Post date:<?php echo $row['jid'] ?></p>
      <p>Last date:</p>


    </div>

  	</div>
  </div>
  <div class="card-footer">
    <div class="row">
    <a target="_blank" href="app_list.php" class="btn btn-primary">LOOK UP</a>
    <a href="#" class="btn btn-danger" style="position: absolute;right: 0px;">DELETE POST</a>
  </div>
  </div>
</div>
  <div style="height: 50px;width: 50px" >
  	
  </div>
		
	</div>
  </div>
<?php } }?>


</div>
<div><?php require "footer.php"; ?></div>
</body>
</html>