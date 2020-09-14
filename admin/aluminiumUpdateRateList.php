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
      $sectionID=trim($_POST['sectionID']);
      $section=trim($_POST['section']);

      $color=trim($_POST['color']);

      $thickness=trim($_POST['thickness']);

      $price=trim($_POST['price']);



      if(empty($section)){
          $errorsection="Please Enter Section";
      }

      elseif (empty($color)) {
        $Errorcolor="Please Enter Mobile Number";
      }

      elseif (empty($thickness)) {
          $Errorthickness="Please Enter Address";
      }
      elseif (empty($price)) {
          $Errorprice="Please Enter Address";
      }
     else
      {


            $sql="UPDATE aluminium_section_details SET section='$section',color='$color',thickness='$thickness',price='$price'     WHERE id='$sectionID'";


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
<li><a href="rateList.php">Rate List</a></li>
<li class="active"><a href="#">Update Section</a></li>
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
 $sql="SELECT * FROM aluminium_section_details WHERE id='$id'";
$read=mysqli_query($con,$sql);
while ($row1=mysqli_fetch_assoc($read))
{


?>
<input type="hidden" name="sectionID" value="<?php echo $row1['id']; ?>">
                          <div class="form-group">
                          <label class="col-sm-3 control-label" for="demo-hor-inputemail">Section</label>
                          <div class="col-sm-9">
                          <input type="text" name="section" id="section" class="form-control" placeholder="Section Name" oninput="check();" value="<?php echo $row1['section']; ?>" required="" >
                          <?php if (!empty($errorsectionname)) { ?> <p class="label label-danger"><?php echo $errorsectionnamee; ?></p> <?php } ?>
                          </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-3 control-label" for="demo-hor-inputemail">Color</label>
                              <div class="col-sm-9">
                                  <select class="form-control" name="color">
                                  <option value="">--Select--</option>
                                  <?php
                                  if($row1['color']=='DULL')
                                  {
                                    ?>
                                    <option value="DULL" selected>DULL</option>
                                    <option value="BROWN">H-23 (BROWN/PC)</option>
                                    <option value="SAHARA">SAHARA</option>
                                    <option value="WOOD">ALU WOOD</option>
                                    <?php
                                  }
                                  elseif($row1['color']=='BROWN')
                                  {
                                    ?>
                                    <option value="DULL" >DULL</option>
                                    <option value="BROWN" selected>H-23 (BROWN/PC)</option>
                                    <option value="SAHARA">SAHARA</option>
                                    <option value="WOOD">ALU WOOD</option>
                                    <?php
                                  }
                                  elseif($row1['color']=='SAHARA')
                                  {
                                   ?>
                                   <option value="DULL" >DULL</option>
                                   <option value="BROWN" >H-23 (BROWN/PC)</option>
                                   <option value="SAHARA" selected>SAHARA</option>
                                   <option value="WOOD">ALU WOOD</option>
                                   <?php
                                 }
                                 elseif($row1['color']=='WOOD')
                                 {
                                  ?>
                                  <option value="DULL" >DULL</option>
                                  <option value="BROWN" >H-23 (BROWN/PC)</option>
                                  <option value="SAHARA" >SAHARA</option>
                                  <option value="WOOD" selected>ALU WOOD</option>
                                  <?php
                                }

                                 ?>

                                  </select>
                                  <?php if (!empty($errorcolor)) { ?> <p class="text text-danger"><?php echo $errorcolor; ?></p> <?php } ?>
                              </div>
                          </div>


                          <div class="form-group">
                              <label class="col-sm-3 control-label" for="demo-hor-inputemail">Thickness</label>
                              <div class="col-sm-9">
                                  <select class="form-control" name="thickness">
                                  <option value="">--Select--</option>
                                  <?php
                                  if($row1['thickness']=='1.2')
                                  {
                                    ?>
                                          <option value="1.2" selected>NORMAL(1.2mm) SLIDING SECTION</option>
                                          <option value="1.6">1.6MM SLIDING SECTION</option>
                                          <option value="2.0">2MM SLIDING SECTION</option>
                                          <?php
                                        }
                                        elseif($row1['thickness']=='1.6')
                                        {
                                         ?>
                                         <option value="1.2" >NORMAL(1.2mm) SLIDING SECTION</option>
                                         <option value="1.6" selected>1.6MM SLIDING SECTION</option>
                                         <option value="2.0">2MM SLIDING SECTION</option>
                                         <?php
                                       }
                                       elseif($row1['thickness']=='2.0')
                                       {
                                        ?>
                                        <option value="1.2" >NORMAL(1.2mm) SLIDING SECTION</option>
                                        <option value="1.6" >1.6MM SLIDING SECTION</option>
                                        <option value="2.0" selected>2MM SLIDING SECTION</option>
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
