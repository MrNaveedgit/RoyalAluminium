
<?php

session_start();
if (isset($_SESSION['emailadmin'])) {
?>
<?php
require 'include/dataPageHead.php';
require 'include/header.php';
?>
<?php

if (isset($_GET['deleteCustomer'])){
    $id=$_GET['deleteCustomer'];
    // $id=mysqli_real_escape_string($conn,$id);
    $sql="DELETE from customer WHERE id='$id'";
    if(mysqli_query($con,$sql))
    {
        header('Location: customer.php');
    }
}

?>
<div class="boxed">
<div id="content-container">
<div id="page-title">
<h1 class="page-header text-overflow">Daily Sale Record</h1>

</div>
<ol class="breadcrumb">
<li><a href="index.php">Dashboard</a></li>
<li><a href="dailySale.php">Customers</a></li>
</ol>
<div id="page-content">
<div class="panel">
<div align="right">
<a  href="addCustomer.php" id="demo-dt-addrow-btn" class="btn btn-info btn-md" style="float: none;margin: 15px;font-size: 20px;height: 50px;width: 300px;font-family: serif;color: floralwhite;font-weight: bold;border-radius: 13px;border: 5px solid #047182e0;animation: 1.5s ease-in-out 0s 1 slideInFromRight;"><i class="pli-male icon-fw icon-lg"></i>
Add New Customers</a>


</div>
<!-- <div class="panel-heading">
<h3 class="panel-title">Expenses Details</h3>
</div> -->

<div class="">

<div class="container">
    
    <div class="row">

        <div class="panel-body panel-primary  filterable"  >
        <div class="table-responsive " style="max-height:270px;">
        <div class="panel-heading" style="animation: 1.5s ease 0s 1 slideInFromTop;">
                <h3 class="panel-title" style="font-family: serif;color: floralwhite;font-weight: bold;font-size:25px;">Customers</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
      
            <table class="table  table-bordered  table-hover" style="animation: 1.5s ease-in-out 0s 1 slideInFromLeft;">
        
                <thead>
                    <tr class="filters">
                     <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php

                    $qr = "SELECT * FROM `customer` order by id desc";

                    $qresult = mysqli_query($con, $qr);
                    // $prow = mysqli_fetch_assoc($qresult);
                    if (mysqli_num_rows($qresult) > 0) 
                    {
                        $i=1;
                    while($prow = mysqli_fetch_assoc($qresult) )
                    {
                    $CustID = $prow['id'];
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $prow['name']; ?></td>
                        <td><?php echo $prow['contact']; ?></td>
                        <td><?php echo $prow['address']; ?></td>
                        <td><a href="updateCustomer.php?id=<?php echo $CustID;?>" class="btn btn-info btn-xs" style="    border: 3px solid #384c5d45;
    border-radius: 9px;
    padding: 6px;
    font-size: 14px;
    font-family: unset;
    color: cornsilk;
    font: caption;">Update</a></td>
                       <td><a href="#" id='<?php echo $CustID; ?>' onClick="deleteItem(this.id)" class="btn btn-danger btn-xs" style="    border: 3px solid #384c5d45;
    border-radius: 9px;
    padding: 6px;
    font-size: 14px;
    font-family: unset;
    color: cornsilk;
    font: caption;">Delete</a></td>

                    </tr>
                 <?php
                   $i++; }}
                    ?>
                </tbody>
                
            </table>
            </div>
        </div>
         </div>
</div>





</div>
</div>
</div>
</div>



 <script type="text/javascript">
        $(document).ready(function() {
    $('#example1').DataTable( {
         "scrollX": true,
        
       
    } );
} );
    </script>
<script>function deleteItem(b){swal({title:"Are you sure?",text:"You will not be able to recover this Customer!",type:"warning",showCancelButton:true,confirmButtonColor:"#ee4a47",confirmButtonText:"Yes, delete it!",closeOnConfirm:true},function(){window.location.href="customer.php?deleteCustomer="+b})};</script>


<!------ Include the above in your HEAD tag ---------->


<script src="js/customerTable/load.js"></script>
</body>
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