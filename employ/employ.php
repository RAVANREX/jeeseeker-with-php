
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
  <h1><?php echo $_SESSION['info']['eemail']; ?></h1>
	<div class="row">
   <?php for($i=0;$i<=11;$i++){?>
	<div class="col-lg-4">
		<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">
  	<div class="row">
  	<div class="col-4">
  	<img src="../profile_pic/person.jpg" style="height: 50px;width: 40px;">
    </div>

  	</div>
  </div>
  <div class="card-footer">Footer</div>
</div>

		
	</div>
<?php } ?>

</div>
</div>
<div><?php require "footer.php"; ?></div>
</body>




</html>