<!DOCTYPE html>
<html>
<head>
	<title></title>
    <?php require "headlink.php"; ?>
</head>
<body>

<div><?php require "navbar.php"; ?></div>
<div class="container">
   
<div align="center">

        <div align="center">
      <img src="logo/logo1.png" style="height: 10%;width: 20%">
        </div>
        <?php 
if(isset($_GET['msg']))
{
  ?>
  <div class="alert alert-danger alert-dismissible">
  
  <strong><?php echo $_GET['msg']; ?></strong>
</div>  
<?php
}
?>
        <form   action="loginc.php"  method="post"> 

        	<div class="row">
            <div class="col-lg-3">
            </div>           
        
            <div class="col-lg-3">
            
        	<h2><b>Email</b></h2>
            <p>Enter your Registered Email</p>
        	<p><input class="form-control" type="text" name="email" ></p>
            </div>
            <div class="col-lg-3">
            <h2><b>Password</b></h2>
            <p>Enter your Password</p>
        	<p><input class="form-control" type="Password" name="password" ></p>
            </div>
            <div class="col-lg-3">
            </div>
            </div>
            <b>I am a </b>
            <input type="radio" value="jobseeker" name="type" checked><b>jobseeker</b>
            <input type="radio" value="employe" name="type"><b>employe</b>
        	<input type="submit" class="badges badge-pill badge-primary" value="Log In" >
            

        </form>
    </div>
</div>
    <div><?php require "footer.php"; ?></div>
</body>
</html>