<?php
session_start();
if (isset($_SESSION['emailadmin']))
{

include 'include/dataPageHead.php';
include 'include/header.php';

   if(isset($_POST['glassCreateRate']))
   {
      $name=trim($_POST['name']);

      $thickness=trim($_POST['thickness']);

      $price=trim($_POST['price']);



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



                        $sql = "INSERT INTO glass_section_details(name,thickness,price)
                        VALUES('$name','$thickness','$price')";


                        if (mysqli_query($con,$sql)) {
                          $success="Glass Created Successfully";
                        }
                        else
                        {

                        $errorSubmit="Glass not created";
                        }



      }
    }
?>
<div class="boxed">
<div id="content-container">
<div id="page-title">
<h1 class="page-header text-overflow">Add New Glass</h1>

</div>
<ol class="breadcrumb">
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="glassRateList.php">Glass Rate List</a></li>
<li class="active"><a href="addRateList.php">Add New Glass</a></li>
</ol>
<div id="page-content">
<div class="col-sm-12" style="padding-bottom: 5%">
<div class="panel">
<div class="panel-heading">
<h3 class="panel-title">Input Glass Details</h3>
</div>



<form class="form-horizontal" method="POST">
<div class="panel-body">

  <div class="form-group">
<label class="col-sm-3 control-label" for="demo-hor-inputemail">Name</label>
<div class="col-sm-9">
<input type="text" name="name" id="name" class="form-control" placeholder="Glass Name" oninput="check();" value="<?php echo $_POST[' name']; ?>" required="" >
<?php if (!empty($errorname)) { ?> <p class="label label-danger"><?php echo $errorname; ?></p> <?php } ?>
</div>
</div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-inputemail">Thickness</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="thickness">
                                    <option value="">--Select--</option>
                                            <option value="5.0" selected>5.0 MM</option>


                                    </select>
                                    <?php if (!empty($errorthickness))
                                     {
                                       ?>
                                        <p class="text text-danger">
                                          <?php echo $errorthickness; ?>
                                        </p>
                                      <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">Price</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="price" placeholder="Price" oninput="this.value = this.value.replace(/[^0-9- ]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  value="<?php echo $_POST['price'];?>" />
                            <?php if (!empty($Errorprice)) { ?> <p class="label label-danger"><?php echo $Errorprice; ?></p> <?php } ?>
                            </div>
                            </div>



</div>
<div align="center">
<?php if (!empty($success)) { ?> <span class="label label-success"><?php echo $success; ?></span> <?php } ?>
<?php if (!empty($errorSubmit)) { ?> <span class="label label-danger"><?php echo $errorSubmit; ?></span> <?php } ?>
</div>
<div class="panel-footer text-right">
<button class="btn btn-success" type="submit" name="glassCreateRate" style="float: none;margin-left: 300px;font-size: 14px;height: 50px;width: 150px;font-family: serif;color: floralwhite;font-weight: bold;border-radius: 10px;border: 2px solid #047182e0;">Add Glass</button>
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
<script type="text/javascript">
  function check(){
    $("input#section").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");

  }
});
  }
</script>


<?php
}
else
{
  header('location:login.php');
}

?>
