<!DOCTYPE html>
<html>
<head>
	<title></title>
  <?php require "headlink.php"; ?>
	<style type="text/css">
		.ck {
			overflow-y: scroll;
			height: 80px;
			width: 200px;

		}
		
	</style>

</head>
<body>

<div><?php require "navbar.php"; ?></div>
<div class="container">
<div align="center">
<div align="center">
      <img src="logo/logo1.png" style="height: 10%;width: 20%">
        </div>


   <h3>JobSeeker Registration</h3>
  <form method="post"  action="job_hid.php" enctype="multipart/form-data" >

          <div class="row">         
        
            <div class="col-lg-4">
            
          <h2><b>Email</b></h2>
            <p>Enter your Registered Email</p>
          <p><input class="form-control" type="text" name="jemail" ></p>
            </div>
            <div class="col-lg-4">
            <h2><b>Password</b></h2>
            <p>Enter your Password</p>
          <p><input class="form-control" type="Password" name="jpass" ></p>
            </div>
            <div class="col-lg-4">
            <h2><b>Check Password</b></h2>
            <p>Confirm your Password</p>
          <p><input class="form-control" type="Password" name="jpwd" ></p>
            </div>
            
            </div>
            
          <input type="submit" class="badges badge-pill badge-primary" value="Log In" >
</form>
</div>
</div>
<div><?php require "footer.php"; ?></div>
</body>

</html>