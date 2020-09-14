<!DOCTYPE html>
<html lang=en>
<head>
  <script>
  $(document).ready(function() {
    $('#type').change(function(){
      var a = document.getElementById('type').value;
      if(a==1)
      {
          $('#section').empty();
        $('#section').append('<option value="0">-- select --</option>');
        $('#section').append('<option value="1">DC 26B</option>');
        $('#section').append('<option value="2">DC 26C</option>');
        $('#section').append('<option value="3">DC 26F</option>');
        $('#section').append('<option value="4">DC 26BA</option>');
        $('#section').append('<option value="5">M26</option>');
      }
      else if(a==2) {
        $('#section').empty();
        $('#section').append('<option value="0">-- select --</option>');
        $('#section').append('<option value="1">D 42</option>');
        $('#section').append('<option value="2">D 42F</option>');
        $('#section').append('<option value="3">D 54</option>');
        $('#section').append('<option value="4">D 54F</option>');
        $('#section').append('<option value="5">D 45A</option>');
        $('#section').append('<option value="6">D 51A</option>');
        $('#section').append('<option value="7">D 51F</option>');
      }
      else if(a==3) {
        $('#section').empty();
        $('#section').append('<option value="0">-- select --</option>');
        $('#section').append('<option value="1">D 42</option>');
        $('#section').append('<option value="2">D 42F</option>');
        $('#section').append('<option value="3">D 54</option>');
        $('#section').append('<option value="4">D 54F</option>');
        $('#section').append('<option value="5">D 45A</option>');
        $('#section').append('<option value="6">D 51A</option>');
        $('#section').append('<option value="7">D 51F</option>');
      }
      else if(a==4) {
        $('#section').empty();
        $('#section').append('<option value="0">-- Door have no section till now --</option>');

      }
});
});
  </script>
<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
<title>GeneralElectronics</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel=stylesheet>
<!--Bootstrap Stylesheet [ REQUIRED ]-->
<link href=css/bootstrap.min.css rel=stylesheet>
<!--Nifty Stylesheet [ REQUIRED ]-->
<link href=css/nifty.min.css rel=stylesheet>
<link href=css/theme-ocean.min.css rel=stylesheet>

<!--Premium Icons [ OPTIONAL ]-->
<link href=premium/icon-sets/icons/line-icons/premium-line-icons.min.css rel=stylesheet>
<link href=premium/icon-sets/icons/solid-icons/premium-solid-icons.min.css rel=stylesheet>
<link href=css/footable.core.css rel=stylesheet>
<link href=css/sweetalert.css rel=stylesheet>
<!--Page Load Progress Bar [ OPTIONAL ]-->
<link href=css/pace.min.css rel=stylesheet>
<script src=js/pace.min.js></script>
<!--jQuery [ REQUIRED ]-->
<script src=js/jquery.min.js></script>

<script src=js/sweetalert-dev.js></script>
<!--BootstrapJS [ RECOMMENDED ]-->
<script src=js/bootstrap.min.js></script>
<!--Nifty Admin [ RECOMMENDED ]-->
<script src=js/nifty.min.js></script>

<!--FooTable [ OPTIONAL ]-->
<script src=js/footable.all.min.js></script>
<!--FooTable Example [ SAMPLE ]-->
<script src=js/tables-footable.js></script>
</head>
