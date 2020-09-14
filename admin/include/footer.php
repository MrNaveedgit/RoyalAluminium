
</script>
 <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer" style="
    font: icon;
    background: #0e36294d;
    color: black;
    font-family: serif;
    f: antialiased;
    
">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
         



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt" style="width:100%;">
                <marquee class="text-bold text-lg mb-4">  Royal Aluminium and Glass House <i>(Qaiser Azeem)</i>    </marquee>
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->




        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

<script>
    $('.date').datepicker({
format: "mm/dd/yyyy",
todayHighlight: true,
autoclose: true
  });
  $(document).ready(function(){
      var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 
var today = mm+'/'+dd+'/'+yyyy;
  $('.mydate').val(today);
});
  $(document).ready(function() {
         $('.select2').select2({
             width:"100%",
             placeholder: function(){
                 $(this).data('placeholder');
             }
         });
     });
</script>


    
    </body>
</html>
