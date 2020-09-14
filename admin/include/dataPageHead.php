<?php
include 'include/connection.php';
?>
<!DOCTYPE html>
<html lang=en>
<head>
<style>
@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}
@keyframes slideInFromRight {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(0);
  }
}
@keyframes slideInFromTop {
  0% {
    transform: translateY(150%);
  }
  100% {
    transform: translateY(0);
  }
}
    </style>



<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<link href=css/style.css rel=stylesheet>
<link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
<title>Royal Aluminium</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel=stylesheet>
<!--Bootstrap Stylesheet [ REQUIRED ]-->
<link href=css/bootstrap.min.css rel=stylesheet>
<!--Nifty Stylesheet [ REQUIRED ]-->
<link href=css/nifty.min.css rel=stylesheet>
<link href=css/theme-ocean.min.css rel=stylesheet>

<!--Premium Icons [ OPTIONAL ]-->
<link href=premium/icon-sets/icons/line-icons/premium-line-icons.min.css rel=stylesheet>
<link href=premium/icon-sets/icons/solid-icons/premium-solid-icons.min.css rel=stylesheet>

<!--DataTables [ OPTIONAL ]-->
<!-- <link href=css/dataTables.bootstrap.css rel=stylesheet>
<link href=css/dataTables.responsive.css rel=stylesheet> -->
<link href=css/jquery.dataTables.min.css rel=stylesheet>
<link href=css/sweetalert.css rel=stylesheet>
    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href=css/jquery.fancybox.css rel=stylesheet>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    

    <!--Page Load Progress Bar [ OPTIONAL ]-->

<!--jQuery [ REQUIRED ]-->
<script src=js/jquery.min.js></script>

<!--BootstrapJS [ RECOMMENDED ]-->
<script src=js/bootstrap.min.js></script>
<!--Nifty Admin [ RECOMMENDED ]-->
<script src=js/nifty.min.js></script>
<!--Bootbox Modals [ OPTIONAL ]-->

<script src=js/form-component.js></script>
<!--Chosen [ OPTIONAL ]-->
<script src=js/chosen.jquery.min.js></script>
    <script src="js/nifty-demo.min.js"></script>


    <!--DataTables [ OPTIONAL ]-->
<script src=js/jquery.dataTables.js></script>

<script src=js/sweetalert-dev.js></script>
<script src=js/datatable/buttons.print.min.js></script>
<script src=js/datatable/dataTables.buttons.min.js></script>
<script src=js/datatable/jquery.dataTables.min.js></script>

<script src=js/datatable/buttons.html5.min.js></script>
<script src=js/datatable/buttons.print.min.js></script>
<script src=js/datatable/dataTables.buttons.min.js></script>
<script src=js/datatable/jquery.dataTables.min.js></script>

<script src=js/datatable/jszip.min.js></script>
<script src=js/datatable/pdfmake.min.js></script>

<script src=js/datatable/vfs_fonts.js></script>
    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <script src="plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<script src=js/jquery.fancybox.pack.js></script>
    <!--Form Component [ SAMPLE ]-->
    <script src="js/form-component.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</head>