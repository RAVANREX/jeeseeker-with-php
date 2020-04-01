<?php require('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require "../headlink.php"; ?>
  <script type="text/javascript" src="js/edit.js"></script>





</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div><?php require "navemp.php"; ?></div>


  <div class="container">
<div align="center">

<div align="center">
      <img src="../logo/logo1.png" style="height: 10%;width: 20%">
        </div>


   <h3>Profile Edit</h3>
   <input type="hidden" id="eid" value="<?php echo $_SESSION['info']['eid'] ?>">


 



                                           
              
             <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
          <h6><b>Company logo</b></h6>
            </div>
            <div class="col-lg-3">
          <p><img class="imgbo" src="<?php 
            if($_SESSION['info']['eclogo']==""){
               echo "../profile_pic/person.jpg";
            }else{echo $_SESSION['info']['eclogo'];}
            ?>">
          <input  id="eclogo_1" class="form-control" type="file" name="eclogo" ></p>
            </div>
            <div class="col-lg-1">
              <button id="eclogo_change"  class="badges badge-pill badge-primary">change</button>
              <button id="eclogo_save"  class="badges badge-pill badge-primary">Save</button>     
            </div>
            <div class="col-lg-3">
                
            </div>
            </div>
            




             <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
          <h6><b>Profile Picture</b></h6>
            </div>
            <div class="col-lg-3">
          <p><img class="imgbo" src="<?php 
            if($_SESSION['info']['epic']==""){
               echo "../profile_pic/person.jpg";
            }else{echo $_SESSION['info']['epic'];}
            ?>">
             <input enctype="multipart/form-data" id="epic_1" class="form-control" type="file" name="epic" ></p>
            </div>
            <div class="col-lg-1">
              <button id="epic_change"  class="badges badge-pill badge-primary">change</button>
              <button id="epic_save"  class="badges badge-pill badge-primary">Save</button>                
            </div>
            <div class="col-lg-3">
                
            </div>
            </div>





            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-1">
          <h6><b>Company Name</b></h6>
            </div>
            <div class="col-lg-3">
          <p><input class="form-control" type="text" id="ecname" name="ecname" value="<?php echo $_SESSION['info']['ecname'] ?>" placeholder="Company Name" >
            </p>
            </div>
            <div class="col-lg-1">
              <button id="ecname_change"  class="badges badge-pill badge-primary">change</button>
              <button id="ecname_save"  class="badges badge-pill badge-primary">Save</button>
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
          <p><input class="form-control" type="text" id="ename" name="ename" value="<?php echo $_SESSION['info']['ename'] ?>" placeholder="Name" ></p>
            </div>
            <div class="col-lg-1">
              <button id="ename_change"  class="badges badge-pill badge-primary">change</button>
              <button id="ename_save"  class="badges badge-pill badge-primary">Save</button>              
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
          <p><input class="form-control" type="email" id="eemail" name="eemail" value="<?php echo $_SESSION['info']['eemail'] ?>" placeholder="Enter Email Id"></p>
            </div>
            <div class="col-lg-1">
              <button id="eemail_change"  class="badges badge-pill badge-primary">change</button>
              <button id="eemail_save"  class="badges badge-pill badge-primary">Save</button>
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
          <p><input class="form-control" type="password"   name="epass" value="<?php echo $_SESSION['info']['epass'] ?>" placeholder="Enter Password" ></p>
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
          <p><input class="form-control" type="password"  name="epwd" value="<?php echo $_SESSION['info']['epass'] ?>" placeholder="Re-Enter Password" ></p>
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
          <p><select class="form-control"  name="esq" id="esq">
<option value="<?php echo $_SESSION['info']['esq'];?>"<?php echo "selected";?>><?php  echo $_SESSION['info']['esq'];?></option>
            <option value="Enter favourite food name">Enter favourite food name</option>
            <option value="Enter your school name">Enter your school name</option>
            <option value="Enter your favourite animal">Enter your favourite animal</option>
            
          </select></p>
            </div>
            <div class="col-lg-1">
              <button id="esq_change"  class="badges badge-pill badge-primary">change</button>
              <button id="esq_save"  class="badges badge-pill badge-primary">Save</button>
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
          <p><input class="form-control" type="text" id="esans"  name="esans" value="<?php echo $_SESSION['info']['esans'] ?>" placeholder="Security Answer" ></p>
            </div>
            <div class="col-lg-1">
              <button id="esans_change"  class="badges badge-pill badge-primary">change</button>
              <button id="esans_save"  class="badges badge-pill badge-primary">Save</button>
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
          <p><input class="form-control" type="text" id="ephn"  name="ephn" value="<?php echo $_SESSION['info']['ephn'] ?>" placeholder="Phone number"  ></p>
            </div>
            <div class="col-lg-1">
              <button id="ephn_change"  class="badges badge-pill badge-primary">change</button>
              <button id="ephn_save"  class="badges badge-pill badge-primary">Save</button>
            </div>
            <div class="col-lg-3">
            </div>
            </div>                


      
    








</div>

</div>
<div><?php require "footer.php"; ?></div>
</body>

</html>