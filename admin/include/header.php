<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$username=$_SESSION['username'];
$userID=$_SESSION['admin'];
$emailadmin=$_SESSION['emailadmin'];?>
<body>

<div id="container" class="effect aside-float aside-bright mainnav-lg navbar-fixed">
<header id="navbar">
<div id="navbar-container" class="boxed">
<div class="navbar-header">
<a href="index.php" class="navbar-brand">
<img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
<div class="brand-title">
<span class="brand-text">R.Aluminium</span>
</div>
</a>
</div>

<div class="navbar-content clearfix">

<ul class="nav navbar-top-links pull-left">
<li class="tgl-menu-btn">
<a class="mainnav-toggle" href="#">
<i class="pli-view-list icon-lg"></i>
</a>
</li>
</ul>

<ul class="nav navbar-top-links pull-right">
<li id="dropdown-user" class="dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
<span class="pull-right">
<i class="pli-male ic-user"></i>
</span>
<div class="username hidden-xs"><?php echo $username; ?></div>
</a>
<div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
<ul class="head-list">
<li>
<a href="changepassword.php">
<i class="pli-male icon-fw icon-lg"></i> Password Change
</a>
</li>
</ul>
<div class="pad-all text-right">
<a href="../logout.php" class="btn btn-primary">
<i class="pli-unlock icon-fw"></i> Logout
</a>
</div>


<div class="pad-all text-right">
<a href="create_backup.php" class="btn btn-primary">
<i class="pli-unlock icon-fw"></i> Backup
</a>
</div>




</div>
</li>
 <li>
                            <a href="#" class="aside-toggle navbar-aside-icon">
                                <i class="pci-ver-dots"></i>
                            </a>
                        </li>

</ul>
</div>
</div>
</header>