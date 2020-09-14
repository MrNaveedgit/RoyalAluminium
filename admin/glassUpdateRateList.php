<?php
session_start();
if (isset($_SESSION['emailadmin'])) {
?>
<?php
include 'include/dataPageHead.php';
include 'include/header.php';
?>
<?php
   if(isset($_POST['updateSection']))

   {
     $name=trim($_POST['name']);

     $thickness=trim($_POST['thickness']);

     $price=trim($_POST['price']);

     $sectionID =trim($_POST['sectionID']);


     if(empty($name)){
         $errorname="Please Enter Name";
     }

     elseif (empty($thickness)) {
         $Errorthickness="Please Enter thickness";
     }
     elseif (empty($price)) {
         $Errorprice="Please Enter price";
     }
     else
      {


            $sql="UPDATE glass_section_details SET name='$name',thickness='$thickness',price='$price'     WHERE id='$sectionID'";


                        if (mysqli_query($con,$sql)) {
                          $success="Section Updated Successfully";
                        }
                        else
                        {

                        $errorSubmit="There is some error in Section Updation";
                        }



        }



      }
?>
<div class="boxed">
<div id="content-container">
<div id="page-title">
<h1 class="page-header text-overflow">Update Section</h1>

</div>
<ol class="breadcrumb">
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="glassRateList.php">Rate List</a></li>
<li class="active"><a href="#">Update Glass Section</a></li>
</ol>
<div id="page-content">
<div class="col-sm-12" style="padding-bottom: 5%">
<div class="panel">
<div class="panel-heading">
<h3 class="panel-title">Update Section Details</h3>
</div>
<form class="form-horizontal" method="POST" >
<div class="panel-body">
<?php
$id=mysqli_real_escape_string($con,$_GET['id']);
 $sql="SELECT * FROM glass_section_details WHERE id='$id'";
$read=mysqli_query($con,$sql);
while ($row1=mysqli_fetch_assoc($read))
{


?>
<input type="hidden" name="sectionID" value="<?php echo $row1['id']; ?>">
                          <div class="form-group">
                          <label class="col-sm-3 control-label" for="demo-hor-inputemail">Name</label>
                          <div class="col-sm-9">
                          <input type="text" name="name" id="name" class="form-control" placeholder="Glass Name" oninput="check();" value="<?php echo $row1['name']; ?>" required="" >
                          <?php if (!empty($errorsectionname)) { ?> <p class="label label-danger"><?php echo $errorsectionnamee; ?></p> <?php } ?>
                          </div>
                          </div>



                          <div class="form-group">
                              <label class="col-sm-3 control-label" for="demo-hor-inputemail">Thickness</label>
                              <div class="col-sm-9">
                                  <select class="form-control" name="thickness">
                                  <option value="">--Select--</option>
                                  <?php
                                  if($row1['thickness']=='5.0')
                                  {
                                    ?>
                                          <option value="5.0" selected>5.0 MM</option>

                                          <?php
                                        }

                                         ?>

                                  </select>
                                  <?php if (!empty($errorthickness)) { ?> <p class="text text-danger"><?php echo $errorthickness; ?></p> <?php } ?>
                              </div>
                          </div>

                          <div class="form-group">
                          <label class="col-sm-3 control-label" for="demo-hor-inputemail">Price</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="price" placeholder="Price" oninput="this.value = this.value.replace(/[^0-9- ]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  value="<?php echo $row1['price'];?>" />
                          <?php if (!empty($Errorprice)) { ?> <p class="label label-danger"><?php echo $Errorprice; ?></p> <?php } ?>
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
<button class="btn btn-success" type="submit" name="updateSection"  style="float: none;margin-left: 300px;font-size: 14px;height: 50px;width: 150px;font-family: serif;color: floralwhite;font-weight: bold;border-radius: 10px;border: 2px solid #047182e0;">Update Customer</button>
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
