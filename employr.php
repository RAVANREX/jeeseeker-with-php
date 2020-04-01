<!DOCTYPE html>
<html>
<head>
	<title>suse</title>
  <?php require "headlink.php"; ?>






</head>
<body >
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div><?php require "navbar.php"; ?></div>
<div class="container">
<div align="center">
       <div align="center">
      <img src="logo/logo1.png" style="height: 10%;width: 20%">
        </div>


   <h3>Employee Registration</h3>


 



	<form method="post"  action="emp_hid.php" >

            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
          <h6><b>Company Name</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="text" name="ecname" placeholder="Company Name" ></p>
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
          <p><input class="form-control" type="text"  name="ename" placeholder="First Name" ></p>
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
          <p><input class="form-control" type="email" name="eemail" placeholder="Enter Email Id"></p>
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
          <p><input class="form-control" type="password"  name="epass" placeholder="Enter Password" ></p>
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
          <p><input class="form-control" type="password"  name="epwd" placeholder="Re-Enter Password" ></p>
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
          <p><select class="form-control"  name="esq">
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
          <p><input class="form-control" type="text" name="esans" ></p>
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
          <p><input class="form-control" type="text"  name="ephn" ></p>
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

</div>
</div>
<div><?php require "footer.php"; ?></div>
</body>








</html>