<?php require('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require "../headlink.php"; ?>


<style type="text/css">
  .col-lg-1{
    text-align: left;
  }
</style>



</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div><?php require "navjob.php"; ?></div>
<div class="container">
<div align="center">

<div align="center">
       <div align="center">
      <img src="../logo/logo1.png" style="height: 10%;width: 20%">
        </div>


   <h3>Profile Edit</h3>


 



	<form method="POST"  action="profile_hid.php" enctype="multipart/form-data" >

            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
          <h6><b>Profile Picture</b></h6>
            </div>
            <div class="col-lg-3">
          <p><img class="imgbo" src="../profile_pic/person.jpg">
          <input class="form-control" type="file" name="jpic" ></p>
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
          <h6><b>Name</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="text"  name="jname" placeholder="First Name" ></p>
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
          <h6><b>Email Id</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="email" name="jemail" placeholder="Enter Email Id"></p>
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
          <h6><b>Password</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="password"  name="jpass" placeholder="Enter Password" ></p>
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
          <h6><b>Re-enter Password</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="password"  name="jpwd" placeholder="Re-Enter Password" ></p>
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
          <h6><b>Date of Birth</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="date"  name="jdob"></p>
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
          <h6><b>Security Question</b></h6>
            </div>
            <div class="col-lg-3">
          <p><select class="form-control"  name="jsq">
            <option value="Enter favourite food name" selected>Enter favourite food name</option>
            <option value="Enter your school name">Enter your school name</option>
            <option value="Enter your favourite animal">Enter your favourite animal</option>
            
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
          <h6><b>Security Answer</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="text" name="jsans" placeholder="Your answere"></p>
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
          <h6><b>Phone No.</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="text"  name="jphn" placeholder="Enter Phone "></p>
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
          <h6><b>Resume</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="file"  name="jresume" ></p>
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
       <label><input type="checkbox" name="jskill[]" value="<?php echo ($i) ?>" /><?php echo ($i) ?></label><br>
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



            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
          <h6><b>Gender</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input type="radio"  name="jgender" value="male" >Male
             <input type="radio"  name="jgender" value="female" >Female</p>
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
          <h6><b>Description</b></h6>
            </div>
            <div class="col-lg-3">
          <p><textarea class="form-control" type="text-area"  name="jdes" placeholder="Description"></textarea> </p>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-3">
            </div>
            </div> 


























      <div  align="center" >
  <input type="submit" class="badges badge-pill badge-primary" value="Register" >
  
      </div>    
   


</form>






  
		
	

</div></div>
<div><?php require "footer.php"; ?></div>
</body>











</html>