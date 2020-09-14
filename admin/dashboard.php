
<?php

session_start();
if (isset($_SESSION['emailadmin'])) {
?>
<?php
require 'include/dataPageHead.php';
require 'include/header.php';
require 'include/head.php';
?>

<div class="boxed">
<div id="content-container">
<div id="page-title">
<h1 class="page-header text-overflow">Dashboard</h1>

</div>
<ol class="breadcrumb">
<li class="active">Dashboard</li>
</ol>
<div id="page-content">
<div class="row">
   
<div class="col-lg-5" style="animation: 1s ease-in-out 0s 1 slideInFromLeft;">
<div class="panel media middle pad-all">
<div class="media-left">
<span class="icon-wrap icon-wrap-lg icon-circle bg-success">
<i class="pli-male icon-fw icon-lg"></i>
</span>
</div>

<div class="media-body" >
<p class="text-2x mar-no text-semibold" >
	<h4 >Customers</h4>
<?php
$sql="SELECT * FROM customer";
if ($read=mysqli_query($con,$sql)) {
$rowcount=mysqli_num_rows($read);
?>
</p>
<p class="text-muted mar-no"><?php echo $rowcount; ?></p>
<?php
}
?>
</div>

</div>
</div>
</div>
</div>
</div>
<?php
include 'include/sidebar.php';
include 'include/footer.php';
?>

<?php
}
else
{
	header('location:login.php');
}

?>
