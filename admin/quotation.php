
<?php

session_start();
if (isset($_SESSION['emailadmin'])) {
?>
<?php
require 'include/dataPageHead.php';
require 'include/header.php';
?>
<?php

if (isset($_GET['deleteSection'])){
   $id=$_GET['deleteSection'];
   // $id=mysqli_real_escape_string($conn,$id);
   $sql="DELETE from section_details WHERE id='$id'";
   if(mysqli_query($con,$sql))
   {
       header('Location: rateList.php');
   }
}

?>
<div class="boxed">
<div id="content-container">
<div id="page-title">
<h1 class="page-header text-overflow">Quotation List</h1>

</div>
<ol class="breadcrumb">
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="quotation.php">Quotation List</a></li>
</ol>
<div id="page-content">
<div class="panel">
<div align="right">
<a  href="addQuotation.php" id="demo-dt-addrow-btn" class="btn btn-info btn-md" style="float: none;margin: 15px;font-size: 20px;height: 50px;width: 300px;font-family: serif;color: floralwhite;font-weight: bold;border-radius: 13px;border: 5px solid #047182e0;animation: 1.5s ease-in-out 0s 1 slideInFromRight;"><i class="pli-bishop icon-fw icon-lg"></i>
Add New Quotation</a>


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
               <h3 class="panel-title" style="font-family: serif;color: floralwhite;font-weight: bold;font-size:25px;">Quotation List</h3>
               <div class="pull-right">
                   <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
               </div>
           </div>

           <table class="table  table-bordered  table-hover" style="animation: 1.5s ease-in-out 0s 1 slideInFromLeft;">

               <thead>
                   <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                       <th><input type="text" class="form-control" placeholder="Customer Name" disabled></th>
                          <!-- <th><input type="text" class="form-control" placeholder="Customer Contact" disabled></th> -->
                       <th><input type="text" class="form-control" placeholder="TYPE" disabled></th>
                       <th><input type="text" class="form-control" placeholder="PANNEL" disabled></th>
                         <th><input type="text" class="form-control" placeholder="WIDTH" disabled></th>
                         <th><input type="text" class="form-control" placeholder="HEIGHT" disabled></th>
                         <th><input type="text" class="form-control" placeholder="SECTION" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Thickness" disabled></th>
                         <th><input type="text" class="form-control" placeholder="COLOR" disabled></th>
                         <th><input type="text" class="form-control" placeholder="AREA" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Glass" disabled></th>
                          <th><input type="text" class="form-control" placeholder="Hardware" disabled></th>
                            <th><input type="text" class="form-control" placeholder="labour" disabled></th>
                         <th><input type="text" class="form-control" placeholder="PER&nbsp;UNIT" disabled></th>
                         <th><input type="text" class="form-control" placeholder="TOTAL" disabled></th>
                         <th><input type="text" class="form-control" placeholder="Disc." disabled></th>
                         <th><input type="text" class="form-control" placeholder="Disc.AMOUNT" disabled></th>


                   </tr>
               </thead>

               <tbody>
               <?php

                   $qr = "SELECT * FROM `quotation` order by id desc";

                   $qresult = mysqli_query($con, $qr);
                   // $prow = mysqli_fetch_assoc($qresult);
                   if (mysqli_num_rows($qresult) > 0)
                   {
                       $i=1;
                   while($prow = mysqli_fetch_assoc($qresult) )
                   {
                   $cid = $prow['cid'];
                   $type = $prow['type'];
                   if($type==1)
                   {
                     $types = "Sliding Section";
                   }
                   else if($type==2)
                   {
                     $types = "Open able Section";
                   }
                   else if($type==3)
                   {
                     $types = "fixed Section";
                   }
                   else if($type==4)
                   {
                     $types = "door Section";
                   }
                   $pannel = $prow['pannel'];

                   if($pannel==2)
                   {
                     $pannels = "Two Pannel";
                   }
                   else if($pannel==3)
                   {
                     $pannels = "Three Pannel";
                   }
                   else if($pannel==4)
                   {
                     $pannels = "Four Pannel";
                   }

                   ?>
                   <tr>
                     <td><?php echo $i; ?></td>
                     <?php
                     $sql1 = "select *from customer where id = '$cid'";
                     $fire1 = mysqli_query($con,$sql1);
                     $row1=mysqli_fetch_array($fire1);
                     ?>
                       <td><?php echo $row1['name']; ?></td>
                       <td><?php echo $row1['contact']; ?></td>


                       <td><?php echo $types; ?></td>

                       <td><?php echo $pannels ?></td>

                       <td><?php echo $prow['width']; ?></td>
                         <td><?php echo $prow['height']; ?></td>

                         <td><?php echo $prow['section']; ?></td>

                          <td><?php echo $prow['thickness']; ?></td>

                          <td><?php echo $prow['color']; ?></td>

                          <td><?php echo $prow['area']; ?></td>

                          <?php
                            $glassID = $prow['glassID'];
                              $glass = "SELECT * FROM `glass_section_details` where id='$glassID'";

                              $qresult1 = mysqli_query($con, $glass);
                              // $prow = mysqli_fetch_assoc($qresult);
                              if (mysqli_num_rows($qresult1) > 0)
                              {
                                $fetch1 = mysqli_fetch_array($qresult1);
                                ?>
                            <td><?php echo $fetch1['name']; ?></td>

                            <?php
                          }
                          else {
                            ?>
                            <td>No Glass Name </td>
                            <?php
                          }
                             ?>

                            <td><?php echo $prow['hardwarePrice']; ?></td>
                              <td><?php echo $prow['labour']; ?></td>

                          <td><?php echo $prow['amountPer']; ?></td>

                          <td><?php echo $prow['amount']; ?></td>
                          <td><?php echo $prow['discount']; ?></td>
                          <td><?php echo $prow['damount']; ?></td>



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
<script>function deleteItem(b){swal({title:"Are you sure?",text:"You will not be able to recover this Section!",type:"warning",showCancelButton:true,confirmButtonColor:"#ee4a47",confirmButtonText:"Yes, delete it!",closeOnConfirm:true},function(){window.location.href="rateList.php?deleteSection="+b})};</script>


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
