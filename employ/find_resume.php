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





<?php
$ip="SELECT * FROM jobseeker;";
$rs=$con->query($ip);
if($rs->num_rows>0)
{
  while($row=$rs->fetch_assoc()){



?>


    <div class="row">

  <div class="col-lg-4">
    <div class="card">
  <div class="card-header">
    <div class="row">
        <div><?php echo $row['jname'] ?></div>
        <div></div>
        </div>
    
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col-4">
    <img src="../profile_pic/person.jpg" style="height: 50px;width: 40px;">
    </div>
    <div class="col-8">
      


        <div class="row">
        <div>EXPRIENCE:</div>
        <div><?php echo $row['jname'] ?></div>
        </div>

    </div>
    
    </div>
  </div>
  <div class="card-footer">
  <a class="btn btn-primary"   data-toggle="modal" data-target="#myModal" >LOOK UP</a>



  <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

  </div>
</div>

    
  </div>
  </div>
<?php } }?>


</div>
<div><?php require "footer.php"; ?></div>
</body>
<!-- The Modal -->
<div class="modal" id="mkModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal mk body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</div>


</html>