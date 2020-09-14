<?php
session_start();
if (isset($_SESSION['emailadmin'])) {
?>
<?php
include 'include/dataPageHead.php';
include 'include/header.php';
?>
<?php
   if(isset($_POST['updatecustomer']))
   
   {
      $customerID=trim($_POST['customerID']);
      $customername=trim($_POST['customername']);
     
      $mobilenumber=trim($_POST['mobilenumber']);
    
      $address=trim($_POST['address']);
      
      $gender=trim($_POST['gender']);

      $desc=trim($_POST['description']);

      if(empty($customername)){
        $errorcustomername="Please Enter Customer Name";
    }
    
    elseif (empty($mobilenumber)) {
      $Errormobilenumber="Please Enter Mobile Number";
    }
  
    elseif (empty($address)) {
        $Erroraddress="Please Enter Address";
    }
     else
      {
       
        
       
        
        {
         
            $sql="UPDATE customer SET name='$customername',contact='$mobilenumber',address='$address',gender='$gender',description='$desc'
             WHERE id='$customerID'";
                    
                      
                        if (mysqli_query($con,$sql)) {
                          $success="Customer Updated Successfully";
                        }
                        else
                        {

                        $errorSubmit="There is some error in Customer Updation";
                        }
                
                         

        }
         

   }
      }
?>
<div class="boxed">
<div id="content-container">
<div id="page-title">
<h1 class="page-header text-overflow">Update Customer</h1>

</div>
<ol class="breadcrumb">
<li><a href="Dashboard.php">Dashboard</a></li>
<li><a href="customer.php">Customer</a></li>
<li class="active"><a href="#">Update Customer</a></li>
</ol>
<div id="page-content">
<div class="col-sm-12" style="padding-bottom: 5%">
<div class="panel">
<div class="panel-heading">
<h3 class="panel-title">Update Customer Details</h3>
</div>
<form class="form-horizontal" method="POST" >
<div class="panel-body">
<?php
$id=mysqli_real_escape_string($con,$_GET['id']);
 $sql="SELECT * FROM customer WHERE id='$id'";
$read=mysqli_query($con,$sql);
while ($row1=mysqli_fetch_assoc($read)) 
{
  

?>
<input type="hidden" name="customerID" value="<?php echo $row1['id']; ?>">

  <div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Customer Name</label>
<div class="col-sm-9">
<input type="text" name="customername" class="form-control" placeholder="Customer Name" value="<?php echo $row1['name']; ?>"
 maxlength="60" required="">
<?php if (!empty($errorcustomername)) { ?> <p class="label label-danger"><?php echo $errorcustomernamee; ?></p> <?php } ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Mobile Number</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="mobilenumber" placeholder="Mobile Number"  value="<?php echo 
$row1['contact'];?>" oninput="this.value = this.value.replace(/[^0-9- ]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10"/>
<?php if (!empty($Errormobilenumber)) { ?> <p class="label label-danger"><?php echo $Errormobilenumber; ?></p> <?php } ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Address</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="address" placeholder="Address"  value="<?php echo $row1['address'];?>" />
<?php if (!empty($Erroraddress)) { ?> <p class="label label-danger"><?php echo $Erroraddress; ?></p> <?php } ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Gender</label>
<div class="col-sm-9">
     <input  type="radio" value="1" name="gender" <?php if ($row1['gender']==1) {
           
          ?> checked <?php }?>>
     <label>Male</label>
         <input  type="radio" value="2" name="gender" <?php if ($row1['gender']==2) {
           
          ?> checked <?php }?> >
     <label>Female</label>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Description</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="description" placeholder="Description"  value="<?php echo $row1['description'];?>" />
<?php if (!empty($Erroremail)) { ?> <p class="label label-danger"><?php echo $Erroremail; ?></p> <?php } ?>
</div>
</div>


<?php
}
?>
</div>
<div align="center">
<?php if (!empty($success)) { ?> <span class="label label-success"><?php echo $success; ?></span> <?php } ?>
<?php if (!empty($errorSubmit)) { ?> <span class="label label-danger"><?php echo $errorSubmit; ?></span> <?php } ?>
</div>
<div class="panel-footer text-right">
<button class="btn btn-success" type="submit" name="updatecustomer">Update Customer</button>
</div>
</form>
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
