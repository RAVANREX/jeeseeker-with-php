<?php require('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require "../headlink.php"; ?>

</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div><?php require "navjob.php"; ?></div>
  <div class="container">
    

    <div class="row">
  <div class="col-6">
   <p> Find Jobs</p>
   </div>
<div class="col-6">
<button style="position: absolute;right: 0px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mkModal">
  Filter
</button>
</div>
</div>



<div id="k">









<?php

$ip="SELECT application.pid,application.jid,post_job.pid,post_job.ad,post_job.pin,post_job.place,post_job.ldate,post_job.exp,post_job.salary_to,post_job.salary_from,post_job.skill,post_job.eid,emp.eid,emp.ecname,post_job.exp,post_job.title FROM ((post_job LEFT JOIN emp ON post_job.eid=emp.eid) LEFT JOIN application ON post_job.pid=application.pid); ";


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
        <div>COMPANY NAME: </div>
        <div><?php echo $row['ecname'] ?></div>
        </div>
    
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col-4">
    </div>
    <div class="col-8">
      

        <div class="row">
        <div>TITLE:</div>
        <div><?php echo $row['title'] ?></div>
        </div>


        <div class="row">
        <div>EXPRIENCE:</div>
        <div><?php echo $row['exp'] ?></div>
        </div>
        </div>

  

  <form id="form">
    <input type="hidden" name="pid" value="<?php echo $row['pid'] ?>">
    <input type="hidden" name="eid" value="<?php echo $row['eid'] ?>">
    <input type="hidden" name="jid" value="<?php echo $_SESSION['info']['jid']; ?>">
    

  </form>


    
    </div>
  </div>
  <div class="card-footer row">
  <a class="btn btn-primary"   data-toggle="modal" data-target="#myModal" >LOOK UP </a>&nbsp;
 <div id="a"> <a class="btn btn-success"  id="apply"  > Apply </a></div>



        <script type="text/javascript">
          $(function () {
    $("#apply").click(function(){
      $.ajax({
        url:'find_job_apply.php',
        type:'POST',
        data:$("#form").serialize(),
        success:function(res){
          $("#a").html(res);
        
        }
      });
    });
  });
        </script> 

 </div>
</div>



  



  <!-- The Modal -->
<div class="modal" id="myModal" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">JOB details</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>skills<?php echo $row['skill'] ?></p>
        <p>salary from<?php echo $row['salary_from'] ?></p>
        <p>salary to<?php echo $row['salary_to'] ?></p>
        <p>exprience<?php echo $row['exp'] ?></p>
        <p>place<?php echo $row['place'] ?></p>
        <p>pin<?php echo $row['pin'] ?></p>
        <p>last date<?php echo $row['ldate'] ?></p>
        <p>last date<?php echo $row['ldate'] ?></p>
        <p><a href="cv/<?php echo $row['ad']; ?>">Download</a></p>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

 

    
  </div>
<?php } }?>

</div>




</div>














<div><?php require "footer.php"; ?></div>
</body>
<!-- The Modal -->
<div class="modal" id="mkModal" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="frm">
          <p>place</p>
          <input type="text" name="place">
        </form>

        <!-- Modal footer -->
      <div class="modal-footer">
        <button id="filter" class="btn btn-danger">OK</button>
      </div>
           

      

        




        <script type="text/javascript">
          $(function () {
    $("#filter").click(function(){
      $.ajax({
        url:'find_job_hid.php',
        type:'POST',
        data:$("#frm").serialize(),
        success:function(res){
          $("#k").html(res);
        document.getElementById("frm").reset(); 
        }
      });
    });
  });
        </script> 








      </div>



    </div>
  </div>
</div>



</html>