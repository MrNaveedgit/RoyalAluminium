<?php
require 'include/connection.php';
if(isset($_POST['login']))
{

	$email=trim($_POST['email']);
	$password=(trim($_POST['password']));

	if (empty($email))
	{

		$Erroremail="please eneter email";
	}
	elseif (empty($password))
	{
		$Errorpassword="please enter password";
	}
	else
	{


			$sql="SELECT * from user WHERE `username`='$email'  AND `password`='$password'  AND `status`='1' AND `type`='1'";
			$read=mysqli_query($con,$sql);

			if (mysqli_num_rows($read)>0)
			 {
				//header('location:Tournaments.php');
				while ($row=mysqli_fetch_Assoc($read))
				{
					session_start();
					$_SESSION['emailadmin']=$row['username'];
					//$_SESSION['clubID']=$row['clubID'];
					header('location:dashboard.php');
					exit();
				}
			}
			else
			{

				$error="incorrect Username or Password";
			}


	}

}
?>
<!DOCTYPE html>
<html lang=en>
<head>
			<meta charset=utf-8>
			<meta name=viewport content="width=device-width, initial-scale=1.0">
			<link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
			<title>Login page</title>
			<!--Open Sans Font [ OPTIONAL ]-->
			<link href='loginCssJs/css/googlefont.css' rel=stylesheet type=text/css>
			<!--Bootstrap Stylesheet [ REQUIRED ]-->
			<link href=loginCssJs/css/bootstrap.min.css rel=stylesheet>
			<!--Nifty Stylesheet [ REQUIRED ]-->
			<link href=loginCssJs/css/nifty.min.css rel=stylesheet>
			<!--Nifty Premium Icon [ DEMONSTRATION ]-->
			<link href=loginCssJs/css/nifty-demo-icons.min.css rel=stylesheet>
			<!--Demo [ DEMONSTRATION ]-->
			<link href=loginCssJs/css/nifty-demo.min.css rel=stylesheet>
			<!--Magic Checkbox [ OPTIONAL ]-->
			<link href=loginCssJs/css/magic-check.min.css rel=stylesheet>
			<!--Pace - Page Load Progress Par [OPTIONAL]-->
			<link href=loginCssJs/css/pace.min.css rel=stylesheet>
			<script src=loginCssJs/js/pace.min.js></script>
			<!--jQuery [ REQUIRED ]-->
			<script src=loginCssJs/js/jquery.min.js></script>
			<!--BootstrapJS [ RECOMMENDED ]-->
			<script src=loginCssJs/js/bootstrap.min.js></script>
			<!--NiftyJS [ RECOMMENDED ]-->
			<script src=loginCssJs/js/nifty.min.js></script>
			<style>
			.overlay{
position:absolute;
top:0;
bottom:0;
left:0;
right:0;
background-color:black;
opacity:45;
			}
			@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}
@keyframes slideInFromTop {
  0% {
    transform: translateY(50%);
  }
  100% {
    transform: translateY(0);
  }
}
			</style>

</head>
<body>


<div id=container class=cls-container>
<!-- <div id=bg-overlay  class="bg-img" style="background-image:url(img/bg-img-7.jpg)"></div> -->
<div class="overlay"></div>
<div id=bg-overlay  class="bg-img" style="background-image:url(img/login2.jpg)">

</div>

<div class=cls-content style="animation: 1s ease-in-out 0s 1 slideInFromTop;">
<div class="cls-content-sm panel">
<div class=panel-body style="background:rgba(105, 104, 104, 0.34);">
<div class="mar-ver pad-btm"  >
<h1 class=h3>Account Login</h1>
<p>Sign In to your account</p>
</div>


<form  action="" method="post">


<?php
if (!empty($error))
{
echo $error;
}
?>
<div class=form-group>
<input type="text" class=form-control placeholder="Email"  name="email">
<?php
if (!empty($Erroremail))
{
	?>
	 <p class="text text-success">
	 <?php echo $Erroremail; ?>
	 </p>
	  <?php
	 }
	 ?>
</div>
<div class=form-group>
<input type="password" class=form-control placeholder="Password" required="" name="password">
<?php
if (!empty($Errorpassword))
 {
	  ?>
	   <p class="text text-success">
	   <?php echo $Errorpassword; ?>
	   </p>
	   <?php
	}
	?>
</div>

<button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Sign In</button>

</form>
</div>

</div>
</div>
</div>
</body>
</html>
