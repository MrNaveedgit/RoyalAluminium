
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


</div>
<ol class="breadcrumb">
<li><a href="index.php">Dashboard</a></li>
<li><a href="addQuotation.php">addQuotation</a></li>
</ol>

<div id="page-content">


  <div class="py-3">
    <ul class="nav nav-tabs" role="tablist">
      <li class="ml-2">&nbsp;</li>

      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#general" role="tab">General</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#size" role="tab">Size</a>
      </li>

    </ul>

    <!-- Tab panes -->

    <div class="tab-content">
      <!-- <div class="tab-pane p-2 active" id="customer" role="tabpanel">
        <form  class="form-horizontal" action="index.html" method="post">
          <div class="panel-body">
          <div class="form-group">
                  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Customer</label>
                  <div class="col-sm-9">
                  <?php
                //  $sql = "SELECT * FROM `customer`";

                  ?>
                  <select class="form-control" name="customerID" required="true" onChange="rem(this.value)">
                  <option value="0">Customer</option>
                      <?php
                      foreach ($con->query($sql) as $row) {
                        ?>
                      <option value="<?php// echo $row['id']; ?>"><?php// echo $row['name']; ?></option>
                      <?php
                        }
                         ?>
                  </select>

                  </div>
          </div>

            <div class="form-group">

              <label class="col-sm-3 control-label" for="demo-hor-inputemail">Customer Contact</label>
              <div class="col-sm-9">
                <input type="text" name="customername" id="contact" class="form-control" placeholder="Customer Name" value="" required="" >

              </div>

            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label" for="demo-hor-inputemail">Customer Address</label>
              <div class="col-sm-9">
                <input type="text" name="customername" id="address" class="form-control" placeholder="Customer Address" value="" required="" >

              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-3 control-label" for="demo-hor-inputemail">Customer Description</label>
              <div class="col-sm-9">
                <input type="text" name="customername" id="description" class="form-control" placeholder="Customer Description" value="" required="" >

              </div>
            </div>


        </div>

        </form>


    </div> -->
      <div class="tab-pane p-2" id="general" role="tabpanel" >
          <form style="width: 50%;margin: auto;"  class="form-horizontal" action="code.php" method="post">


            <div class="form-group">
                    <label class="col-sm-3 control-label" for="demo-hor-inputemail">Customer</label>
                    <div class="col-sm-9">
                    <?php
                    $sql = "SELECT * FROM `customer`";

                    ?>
                    <select class="form-control" name="cID" required="true">
                    <option value="0">Customer</option>
                        <?php
                        foreach ($con->query($sql) as $row) {
                          ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php
                          }
                           ?>
                    </select>

                    </div>
            </div>

        <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-inputemail">Type</label>
                <div class="col-sm-9">

                <select class="form-control" name="type" id="type" required="true">
                <option value="0">-- select --</option>

                    <option value="1">Sliding</option>
                      <option value="2">Open Able</option>
                        <option value="3">Fixed</option>
                          <option value="4">Door</option>

                </select>

                </div>
        </div>

        <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-inputemail">Pannel</label>
                <div class="col-sm-9">

                <select class="form-control" name="pannel" required="true">
                <option value="0">-- select --</option>

                    <option value="2" selected>2</option>
                      <option value="3">3</option>
                        <option value="4">4</option>


                </select>

                </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label" for="demo-hor-inputemail">Width</label>
          <div class="col-sm-9">
            <input type="text" name="width"  class="form-control" placeholder="Enter Width of window" value="" required="" >

          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label" for="demo-hor-inputemail">Height</label>
          <div class="col-sm-9">
            <input type="text" name="height"  class="form-control" placeholder="Enter Height of window" value="" required="" >

          </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-inputemail">Section</label>
                <div class="col-sm-9">

                <select class="form-control" name="section" id="section" required="true" onChange="rem(this.value)">
                <!-- <option value="0">-- select --</option>

                    <option value="1">DC 26B</option>
                    <option value="2">DC 26C</option>
                    <option value="3">DC 26F</option>
                    <option value="4">DC 26BA</option>
                    <option value="5">M26</option> -->




                </select>

                </div>
        </div>

        <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-inputemail">Thickness</label>
                <div class="col-sm-9">

                <select class="form-control" name="thickness" required="true" onChange="rem(this.value)">
                <option value="0">-- select --</option>

                    <option value="1.2">1.2mm</option>
                    <option value="1.6">1.6mm</option>
                    <option value="2.0">2.0mm</option>


                </select>

                </div>
        </div>


        <div class="form-group">
        <label class="col-sm-3 control-label" for="demo-hor-inputemail">Color</label>
        <div class="col-sm-9">
            <select class="form-control" name="color">
            <option value="">--Select--</option>
                    <option value="DULL">DULL</option>
                    <option value="BROWN">H-23 (BROWN/PC)</option>
                    <option value="SAHARA">SAHARA</option>
                    <option value="WOOD">ALU WOOD</option>

            </select>
            <?php if (!empty($errorcolor)) { ?> <p class="text text-danger"><?php echo $errorcolor; ?></p> <?php } ?>
        </div>
    </div>

    <!-- gLASS  rate -->
    <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-inputemail">Glass</label>
            <div class="col-sm-9">
            <?php
            $sql = "SELECT * FROM `glass_section_details`";

            ?>
            <select class="form-control" name="glassName" required="true">
            <option value="0">Glass</option>
                <?php
                foreach ($con->query($sql) as $row) {
                  ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php
                  }
                   ?>
            </select>

            </div>
    </div>
<!-- hardware rate -->
<div class="form-group">
  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Hardware Price</label>
  <div class="col-sm-9">
    <input type="text" name="hardwarePrice"  class="form-control" placeholder="Enter Hardware Price of window" value="" required="" >

  </div>
</div>


<div class="form-group">
  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Labour Price</label>
  <div class="col-sm-9">
    <input type="text" name="labourPrice"  class="form-control" placeholder="Enter Hardware Price of window" value="" required="" >

  </div>
</div>


<div class="form-group">
  <label class="col-sm-3 control-label" for="demo-hor-inputemail">Discount</label>
  <div class="col-sm-9">
    <input type="text" name="discountPrice"  class="form-control" placeholder="Enter discount Price of window" value="" required="" >

  </div>
</div>


    <div class="panel-footer text-right">
    <button class="btn btn-success" type="submit" name="createQuotation" style="float: none;margin-left: 300px;font-size: 14px;height: 50px;width: 150px;font-family: serif;color: floralwhite;font-weight: bold;border-radius: 10px;border: 2px solid #047182e0;">Create Quotation</button>
    </div>

</form>
      </div>
      <div class="tab-pane p-2" id="size" role="tabpanel">Messages tab.</div>

    </div>
  </div>
</div>



<script>








   function rem(val)
   {

             //  var totals=0;
           //var totals = document.getElementById('total').value;
           //alert(totals);
           $.ajax({
               type: "POST",
               url: "ajax/getCustomerDetails.php",
               data : {Cid:val},
               dataType :"html",
               success:function(data){
                   $("#contact").val(data.contact);
                   $("#address").val(data.address);
                   $("#description").val(data.description);
               }
           });


   }
   </script>
























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
