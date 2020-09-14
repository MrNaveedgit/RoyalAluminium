<?php
session_start();
if (isset($_SESSION['emailadmin'])) {
?>
<?php
include 'include/dataPageHead.php';
include 'include/header.php';
?>
<?php
   if(isset($_POST['createCustomer']))
   {
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
       $sql1="SELECT contact FROM customer WHERE contact='$mobilenumber'";
        $read1=mysqli_query($con,$sql1);
        if (mysqli_num_rows($read1)>0)
        {
            
            $errorSubmit="Customer Already Exist";
        }
        else
        {
         

                  
                        $sql = "INSERT INTO customer (name,contact,address,gender,description)
                        VALUES ('$customername','$mobilenumber','$address','$gender','$desc')";
                      
                      
                        if (mysqli_query($con,$sql)) {
                          $success="Customer Created Successfully";
                        }
                        else
                        {

                        $errorSubmit="Customer not created";
                        }
                
                         

        }
         
      }
    }
?>
<div class="boxed">
<div id="content-container">
<div id="page-title">
<h1 class="page-header text-overflow">Add Customer</h1>

</div>
<ol class="breadcrumb">
<li><a href="Dashboard.php">Dashboard</a></li>
<li><a href="customer.php">Customer</a></li>
<li class="active"><a href="addCustomer.php">Create Customer</a></li>
</ol>
<div id="page-content">
<div class="col-sm-12" style="padding-bottom: 5%">
<div class="panel">
<div class="panel-heading">
<h3 class="panel-title">Input Customer Details</h3>
</div>



<form class="form-horizontal" method="POST">
<div class="panel-body">
 
  <div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Customer Name</label>
<div class="col-sm-9">
<input type="text" name="customername" class="form-control" placeholder="Customer Name" value="<?php echo $_POST['customername']; ?>" required="" >
<?php if (!empty($errorcustomername)) { ?> <p class="label label-danger"><?php echo $errorcustomernamee; ?></p> <?php } ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Mobile Number</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="mobilenumber" placeholder="Mobile Number"  value="<?php echo $_POST['mobilenumber'];?>"  oninput="this.value = this.value.replace(/[^0-9- ]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="11"/>
<?php if (!empty($Errormobilenumber)) { ?> <p class="label label-danger"><?php echo $Errormobilenumber; ?></p> <?php } ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Address</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="address" placeholder="Address"  value="<?php echo $_POST['address'];?>" />
<?php if (!empty($Erroraddress)) { ?> <p class="label label-danger"><?php echo $Erroraddress; ?></p> <?php } ?>
</div>
</div>



<div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Gender</label>
<div class="col-sm-9">
     <input  type="radio" value="1" name="gender" checked>
     <label>Male</label>
         <input  type="radio" value="2" name="gender">
     <label>Female</label>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Description</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="description" placeholder="Description"  value="<?php echo $_POST['email'];?>" />

</div>
</div>



</div>
<div align="center">
<?php if (!empty($success)) { ?> <span class="label label-success"><?php echo $success; ?></span> <?php } ?>
<?php if (!empty($errorSubmit)) { ?> <span class="label label-danger"><?php echo $errorSubmit; ?></span> <?php } ?>
</div>
<div class="panel-footer text-right">
<button class="btn btn-success" type="submit" name="createCustomer">Create New Customer</button>
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
