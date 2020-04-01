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
	<div align="center">
	<div align="center">
      <img src="../logo/logo1.png" style="height: 10%;width: 20%">
        </div>
  <div class="cotainer">
  <form method="post" action="post_hid.php" enctype="multipart/form-data">






            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
            <h6><b>Job Title</b></h6>
            </div>
            <div class="col-lg-3">
            <p><select name="title">
                <option value="web-devlopment">web devlopment</option>
                <option value="Ai">Ai</option>
                <option value="data-entry">data entry</option>
                <option value="DBA">DBA</option>
                <option value="manager">manager</option>
                
            </select></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div>








  	

            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
        	<h6><b>Place</b></h6>
            </div>
            <div class="col-lg-3">
        	<p><input class="form-control" type="text" name="place" ></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div>


            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
        	<h6><b>Pin</b></h6>
            </div>
            <div class="col-lg-3">
        	<p><input class="form-control" type="number" name="pin" ></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div>


            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
        	<h6><b>Salary</b></h6>
            </div>
            <div class="col-lg-3">
        	<p><input class="form-control" type="number" name="salary_from" placeholder="from-salary"></p>
            </div>
            <div class="col-lg-3">
            <p><input class="form-control" type="number" name="salary_to" placeholder="to-salary" ></p>
            </div>
            <div class="col-lg-1">
            </div>
            </div>


            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
        	<h6><b>Ad</b></h6>
            </div>
            <div class="col-lg-3">
        	<p><input class="form-control" type="file" name="ad" ></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div>




            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
            <h6><b>Exprience</b></h6>
            </div>
            <div class="col-lg-3">
            <p><input class="form-control" type="text" name="exp" ></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div>








            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
            <h6><b>Date of Post</b></h6>
            </div>
            <div class="col-lg-3">
            <p><input class="form-control" type="date" name="pdate" ></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div>







            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
            <h6><b>Last Date for application</b></h6>
            </div>
            <div class="col-lg-3">
            <p><input class="form-control" type="date" name="ldate" ></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div>








        

            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
        	<h6><b>Skills</b></h6>
            </div>
            <div class="col-lg-3">
        	<p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Choose skill</button></p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div>

<!-- The Modal -->
<div class="modal" id="myModal" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="ck">	 
    	<?php for($i=0;$i<200;$i++){ ?>
       <label><input type="checkbox" name="skill[]" value="<?php echo ($i) ?>" /><?php echo ($i) ?></label><br>
        <?php } ?>
       </div>
   

       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer" >
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>

    </div>
  </div>
</div>









<div  align="center" >
  <input type="submit" class="badges badge-pill badge-primary" value="Confirm and Post" >
  
</div>
  </form>

</div>
</div>
<div><?php require "footer.php"; ?></div>
</body>











</html>