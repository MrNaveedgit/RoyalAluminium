<nav id="mainnav-container">
<div id="mainnav">
<div id="mainnav-menu-wrap">
<div class="nano">
<div class="nano-content">
<div id="mainnav-profile" class="mainnav-profile">
<div class="profile-wrap">
<div class="pad-btm">
<img class="img-circle img-sm img-border" src="img/profile-photos/1.png" alt="Profile Picture">
</div>
<a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">

<p class="mnp-name"><?php echo $username; ?></p>
<span class="mnp-desc"><?php echo $emailadmin; ?></span>
</a>
</div>

</div>

<ul id="mainnav-menu" class="list-group">
<li class="list-header">Main Menu</li>
<li class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo  'active-link';?>">
<a href="dashboard.php">
<i class="psi-monitor"></i>
<span class="menu-title">Dashboard</span>
</a>
</li>
<li class="<?php if(basename($_SERVER['PHP_SELF']) == 'onlineproducts.php') echo  'active-link';
if(basename($_SERVER['PHP_SELF']) == 'addonlineproduct.php') echo  'active-link';
if(basename($_SERVER['PHP_SELF']) == 'updateonlineproduct.php')
echo 'active-link';
?>">
<a href="customer.php">
<i class="pli-male icon-fw icon-lg"></i>
<span class="menu-title">
<strong>Customers</strong>
</span>
</a>
</li>
<li class="<?php if(basename($_SERVER['PHP_SELF']) == 'aluminiumRateList.php') echo  'active-link';

?>">
<a href="aluminiumRateList.php">
<i class="pli-male icon-fw icon-lg"></i>
<span class="menu-title">
<strong>Aluminium Rate List</strong>
</span>
</a>

</li>

<li class="<?php if(basename($_SERVER['PHP_SELF']) == 'glassRateList.php') echo  'active-link';

?>">
<a href="glassRateList.php">
<i class="pli-male icon-fw icon-lg"></i>
<span class="menu-title">
<strong>Glass Rate List</strong>
</span>
</a>

</li>
<li class="<?php if(basename($_SERVER['PHP_SELF']) == 'quotation.php') echo  'active-link';?>">
<a href="quotation.php">
<i class="psi-notepad-2"></i>
<span class="menu-title">
Quotation
</span>
</a>
</li>

<!-- End Deaer Here -->

<li class="<?php if(basename($_SERVER['PHP_SELF']) == 'employee.php') echo  'active-link';
if(basename($_SERVER['PHP_SELF']) == 'addemployee.php') echo  'active-link';
if(basename($_SERVER['PHP_SELF']) == 'updateemployee.php') echo  'active-link';
?>">
<a href="employee.php">
<i class="psi-file-excel"></i>
<span class="menu-title">Employees</span>
</a>
</li>
    <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'expenses.php') echo  'active-link';?>">
        <a href="expenses.php">
            <i class="psi-file-excel"></i>
            <span class="menu-title">Expenses</span>
        </a>
    </li>
       <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'salaries.php') echo  'active-link';?>">
        <a href="salaries.php">
            <i class="psi-file-excel"></i>
            <span class="menu-title">Salaries</span>
        </a>
    </li>



<li class="list-divider"></li>
<li class="list-header">Reports</li>




    <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'salesreport.php') echo  'active-link';?>">
        <a href="salesreport.php">
            <i class="psi-file-excel"></i>
            <span class="menu-title">Customer Report</span>
        </a>
    </li>

   <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'installment_report.php') echo  'active-link';?>">
        <a href="installment_report.php">
            <i class="psi-file-excel"></i>
            <span class="menu-title">Quotation Report</span>
        </a>
    </li>

    <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'dailySale_report.php') echo  'active-link';?>">
        <a href="dailySale_report.php">
            <i class="psi-file-excel"></i>
            <span class="menu-title">Sale Report</span>
        </a>
    </li>

    <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'purchasereport.php') echo  'active-link';?>">
        <a href="purchasereport.php">
            <i class="psi-file-excel"></i>
            <span class="menu-title">Purchases Report</span>
        </a>
    </li>
     <li class="<?php if(basename($_SERVER['PHP_SELF']) == 'expensereport.php') echo  'active-link';?>">
        <a href="expensereport.php">
            <i class="psi-file-excel"></i>
            <span class="menu-title">Expenses Report</span>
        </a>
    </li class="<?php if(basename($_SERVER['PHP_SELF']) == 'onlineproducts.php') echo  'active-link';?>">
    <li class="list-divider"></li>
    <li class="list-header">Settings</li>


<li class="<?php if(basename($_SERVER['PHP_SELF']) == 'accounts.php') echo  'active-link';
if(basename($_SERVER['PHP_SELF']) == 'addaccount.php') echo  'active-link';
?>"
>
<a href="accounts.php">
<i class="pli-male icon-fw icon-lg"></i>
<span class="menu-title">Accounts</span>
</a>
</li>

</ul>
</div>
</div>
</div>
</div>
</nav>
