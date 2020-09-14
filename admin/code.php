<?php

include 'include/connection.php';

if(isset($_POST['createQuotation']))
{


        $Cid=trim($_POST['cID']);
      //  echo $Cid;
         $type=trim($_POST['type']);

         $pannel=trim($_POST['pannel']);

         $width=trim($_POST['width']);

         $height=trim($_POST['height']);

         $section=trim($_POST['section']);

         $thickness=trim($_POST['thickness']);

         $color =trim($_POST['color']);

         $glass = trim($_POST['glassName']);

         $hardware = trim($_POST['hardwarePrice']);

         $labour = trim($_POST['labourPrice']);

         $discount = trim($_POST['discountPrice']);



         $widthFt = $width / 12;
         $heightFt= $height / 12;
}
   // echo $widthFt;
   // echo "<br>";
   // echo $heightFt;
   // echo "<br>";
   // echo $pannel;
   // echo "<br>";
   // echo $heightInch;
   // echo "<br>";
   // echo $heightInch;
   // echo "<br>";
   // echo $heightInch;
   // echo "<br>";
   // echo $heightInch;
   // echo "<br>";
   // echo $heightInch;


if($type==1) //sliding
{
      if($section==1) //DC 26 B
      {
                        //Prepration of outer Frame
                        $sql1 = "select * from aluminium_section_details where section='DC26B'  AND color='$color' AND thickness='$thickness'";
                        $fire1=mysqli_query($con,$sql1);
                        $row1 = mysqli_fetch_array($fire1);

                        $dc26bSize = $widthFt;
                        $dc26bPrice = $row1['price'] * $dc26bSize;

                        $sql2 = "select * from aluminium_section_details where section='DC30B'  AND color='$color' AND thickness='$thickness'";
                        $fire2=mysqli_query($con,$sql2);
                        $row2 = mysqli_fetch_array($fire2);


                        $dc30bSize = 2 * $heightFt  + $widthFt;
                        $dc30bPrice = $row2['price'] * $dc30bSize;

                              //Prepration of  inner Frame
                              if($pannel==2)
                              {
                              $m28Size = 2 * $heightFt;
                                $m23Size = 2 * $heightFt;
                              }
                              else if($pannel==3)
                              {
                              $m28Size = 4 * $heightFt;
                                $m23Size = 2 * $heightFt;
                              }
                              else if($pannel==4)
                              {
                              $m28Size = 4 * $heightFt;
                              $m23Size = 4 * $heightFt;
                              }

                        //Fetcing price of all sections first
                        $sql3 = "select * from aluminium_section_details where section='M23'  AND color='$color' AND thickness='$thickness'";
                        $fire3=mysqli_query($con,$sql3);
                        $row3 = mysqli_fetch_array($fire3);


                        $m23Price = $row3['price'] * $m23Size;

                        $sql4 = "select * from aluminium_section_details where section='M28'  AND color='$color' AND thickness='$thickness'";
                        $fire4=mysqli_query($con,$sql4);
                        $row4 = mysqli_fetch_array($fire4);




                        $m28Price = $row4['price'] * $m28Size;

                        $sql5 = "select * from aluminium_section_details where section='M24'  AND color='$color' AND thickness='$thickness'";
                        $fire5=mysqli_query($con,$sql5);
                        $row5 = mysqli_fetch_array($fire5);

                        $m24Size = 2 * $widthFt;
                        $m24Price = $row5['price'] * $m24Size;

                        $sql6 = "select * from aluminium_section_details where section='D29'  AND color='$color' AND thickness='$thickness'";
                        $fire6=mysqli_query($con,$sql6);
                        $row6 = mysqli_fetch_array($fire6);

                        $d29Size = 2 * $heightFt + $width;
                        $d29Price = $row3['price'] * $d29Size;


                        //Calculating  Area
                        $area = $widthFt * $heightFt;
                        //Calculating Glass price
                        $sql7 = "select *from glass_section_details where id='$glass'";
                        $fire7 = mysqli_query($sql7,$con);
                        $row7 = mysqli_fetch_array($fire7);
                        $glassUnit = $row['price'];
                        $glassPrice = $glassUnit * $area;

                        $daluminium =  $dc26bPrice + $dc30bPrice + $m23Size + $m28Price + $m24Price + $d29Price +$hardware ;
                        $disc = ($discount * $daluminium) / 100;
                       $paluminium = $daluminium - $disc;





                        $total = $dc26bPrice + $dc30bPrice + $m23Size + $m28Price + $m24Price + $d29Price +$hardware + $glassPrice + $labour;

                        $dtotal = $paluminium +$hardware + $glassPrice + $labour;

                          $dperUnit = $dtotal /$area;

                        $Amount = $total;

                        $perUnit =$total / $area ;

                        $dperUnit = $dtotal /$area;

                        echo " You Total amount is  $Amount ";
                        echo "<br>";
                        echo " Your Price per unit is $perUnit";







            }
            else if($section==2) //DC 26 C
            {
              //Prepration of outer Frame
              $sql1 = "select * from aluminium_section_details where section='DC26C'  AND color='$color' AND thickness='$thickness'";
              $fire1=mysqli_query($con,$sql1);
              $row1 = mysqli_fetch_array($fire1);

              $dc26cSize = $widthFt;
              $dc26cPrice = $row1['price'] * $dc26cSize;
              echo "<br>";
              echo $dc26cPrice;

              $sql2 = "select * from aluminium_section_details where section='DC30C'  AND color='$color' AND thickness='$thickness'";
              $fire2=mysqli_query($con,$sql2);
              $row2 = mysqli_fetch_array($fire2);


              $dc30cSize = 2 * $heightFt  + $widthFt;
              $dc30cPrice = $row2['price'] * $dc30cSize;
              echo "<br>";
              echo $dc30cPrice;

                    //Prepration of  inner Frame
                    if($pannel==2)
                    {
                    $m28Size = 2 * $heightFt;
                      $m23Size = 2 * $heightFt;
                    }
                    else if($pannel==3)
                    {
                    $m28Size = 4 * $heightFt;
                      $m23Size = 2 * $heightFt;
                    }
                    else if($pannel==4)
                    {
                    $m28Size = 4 * $heightFt;
                    $m23Size = 4 * $heightFt;
                    }

              //Fetcing price of all sections first
              $sql3 = "select * from aluminium_section_details where section='M23'  AND color='$color' AND thickness='$thickness'";
              $fire3=mysqli_query($con,$sql3);
              $row3 = mysqli_fetch_array($fire3);


              $m23Price = $row3['price'] * $m23Size;
              echo "<br>";
              echo $m23Price;

              $sql4 = "select * from aluminium_section_details where section='M28'  AND color='$color' AND thickness='$thickness'";
              $fire4=mysqli_query($con,$sql4);
              $row4 = mysqli_fetch_array($fire4);




              $m28Price = $row4['price'] * $m28Size;

              echo "<br>";
              echo $m28Size;
              echo "<br>";
              echo $m28Price;

              $sql5 = "select * from aluminium_section_details where section='M24'  AND color='$color' AND thickness='$thickness'";
              $fire5=mysqli_query($con,$sql5);
              $row5 = mysqli_fetch_array($fire5);

              $m24Size = 2 * $widthFt;
              $m24Price = $row5['price'] * $m24Size;

              echo "<br>";
              echo $m24Price;

              $sql6 = "select * from aluminium_section_details where section='D29'  AND color='$color' AND thickness='$thickness'";
              $fire6=mysqli_query($con,$sql6);
              $row6 = mysqli_fetch_array($fire6);




              $d29Size =  2 * $heightFt  + $widthFt;
              $d29Price = $row6['price'] * $d29Size;

              echo "<br>";
              echo $d29Price;
              echo "<br>";

              $total = 0;



                                      //Calculating  Area
                                      $area = $widthFt * $heightFt;
                                      //Calculating Glass price
                                      $sql7 = "select *from glass_section_details where id='$glass'";
                                      $fire7 = mysqli_query($sql7,$con);
                                      $row7 = mysqli_fetch_array($fire7);
                                      $glassUnit = $row['price'];
                                      $glassPrice = $glassUnit * $area;


                                                              $daluminium =   $dc26cPrice + $dc30cPrice + $m23Price + $m28Price + $m24Price + $d29Price;
                                                              $disc = ($discount * $daluminium) / 100;
                                                             $paluminium = $daluminium - $disc;





              $total = $dc26cPrice + $dc30cPrice + $m23Price + $m28Price + $m24Price + $d29Price +$hardware +$glassPrice + $labour;

              echo "<br>";
              echo $total;
              echo "<br>";

            //  $area = $widthFt * $heightFt;

              $Amount = $total;

                                      $dtotal = $paluminium +$hardware + $glassPrice + $labour;

                                        $dperUnit = $dtotal /$area;
              $perUnit =$total / $area ;

              echo " You Total amount is  $Amount ";
              echo "<br>";
              echo " You Total Area is  $area";
              echo "<br>";
              echo " Your Price per unit is $perUnit";






            }
            else if($section==3) //DC 26 F
            {
              //Prepration of outer Frame
              $sql1 = "select * from aluminium_section_details where section='DC26F'  AND color='$color' AND thickness='$thickness'";
              $fire1=mysqli_query($con,$sql1);
              $row1 = mysqli_fetch_array($fire1);

              $w=$width;
              $h=$height;
              $w+=3;
              $h+=3;
              // $widthFt = $width / 12;
              // $heightFt= $height / 12;

              $wf=$w/12;
              $hf=$h/12;

              // $dc26fSize = $widthFt;
                $dc26fSize = $wf;
              $dc26fPrice = $row1['price'] * $dc26fSize;
              echo "<br>";
              echo $dc26fPrice;



              $sql2 = "select * from aluminium_section_details where section='DC30F'  AND color='$color' AND thickness='$thickness'";
              $fire2=mysqli_query($con,$sql2);
              $row2 = mysqli_fetch_array($fire2);


              $dc30fSize = 2 * $hf  + $wf;
              $dc30fPrice = $row2['price'] * $dc30fSize;
              echo "<br>";
              echo $dc30fPrice;
              echo $dc30fSize;

                    //Prepration of  inner Frame
                    if($pannel==2)
                    {
                    $m28Size = 2 * $heightFt;
                      $m23Size = 2 * $heightFt;
                    }
                    else if($pannel==3)
                    {
                    $m28Size = 4 * $heightFt;
                      $m23Size = 2 * $heightFt;
                    }
                    else if($pannel==4)
                    {
                    $m28Size = 4 * $heightFt;
                    $m23Size = 4 * $heightFt;
                    }

              //Fetcing price of all sections first
              $sql3 = "select * from aluminium_section_details where section='M23'  AND color='$color' AND thickness='$thickness'";
              $fire3=mysqli_query($con,$sql3);
              $row3 = mysqli_fetch_array($fire3);


              $m23Price = $row3['price'] * $m23Size;
              echo "<br>";
              echo $m23Price;

              $sql4 = "select * from aluminium_section_details where section='M28'  AND color='$color' AND thickness='$thickness'";
              $fire4=mysqli_query($con,$sql4);
              $row4 = mysqli_fetch_array($fire4);




              $m28Price = $row4['price'] * $m28Size;

              echo "<br>";
              echo $m28Size;
              echo "<br>";
              echo $m28Price;

              $sql5 = "select * from aluminium_section_details where section='M24'  AND color='$color' AND thickness='$thickness'";
              $fire5=mysqli_query($con,$sql5);
              $row5 = mysqli_fetch_array($fire5);

              $m24Size = 2 * $widthFt;
              $m24Price = $row5['price'] * $m24Size;

              echo "<br>";
              echo $m24Price;

              $sql6 = "select * from aluminium_section_details where section='D29'  AND color='$color' AND thickness='$thickness'";
              $fire6=mysqli_query($con,$sql6);
              $row6 = mysqli_fetch_array($fire6);




              $d29Size =  2 * $heightFt  + $widthFt;
              $d29Price = $row6['price'] * $d29Size;

              echo "<br>";
              echo $d29Price;
              echo "<br>";

              $total = 0;

                                      //Calculating  Area
                                      $area = $widthFt * $heightFt;
                                      //Calculating Glass price
                                      $sql7 = "select *from glass_section_details where id='$glass'";
                                      $fire7 = mysqli_query($sql7,$con);
                                      $row7 = mysqli_fetch_array($fire7);
                                      $glassUnit = $row['price'];
                                      $glassPrice = $glassUnit * $area;


                                                    $daluminium =   $dc26fPrice + $dc30fPrice + $m23Price + $m28Price + $m24Price + $d29Price;
                                                    $disc = ($discount * $daluminium) / 100;
                                                   $paluminium = $daluminium - $disc;



              $total = $dc26fPrice + $dc30fPrice + $m23Price + $m28Price + $m24Price + $d29Price +$hardware +$glassPrice +$labour;

              echo "<br>";
              echo $total;
              echo "<br>";

              //$area = $widthFt * $heightFt;


              $dtotal = $paluminium +$hardware + $glassPrice + $labour;

                $dperUnit = $dtotal /$area;


              $Amount = $total;

              $perUnit =$total / $area ;

              echo " You Total amount is  $Amount ";
              echo "<br>";
              echo " You Total Area is  $area";
              echo "<br>";
              echo " Your Price per unit is $perUnit";


            }
            else if($section==4) //DC 26 BA
            {
              //Prepration of outer Frame
              $sql1 = "select * from aluminium_section_details where section='DC26BA'  AND color='$color' AND thickness='$thickness'";
              $fire1=mysqli_query($con,$sql1);
              $row1 = mysqli_fetch_array($fire1);

              $dc26baSize = $widthFt;
              $dc26baPrice = $row1['price'] * $dc26baSize;
              echo "<br>";
              echo $dc26baPrice;

              $sql2 = "select * from aluminium_section_details where section='DC30BA'  AND color='$color' AND thickness='$thickness'";
              $fire2=mysqli_query($con,$sql2);
              $row2 = mysqli_fetch_array($fire2);


              $dc30baSize = 2 * $heightFt  + $widthFt;
              $dc30baPrice = $row2['price'] * $dc30baSize;
              echo "<br>";
              echo $dc30baPrice;

                    //Prepration of  inner Frame
                    if($pannel==2)
                    {
                    $m28Size = 2 * $heightFt;
                      $m23Size = 2 * $heightFt;
                    }
                    else if($pannel==3)
                    {
                    $m28Size = 4 * $heightFt;
                      $m23Size = 2 * $heightFt;
                    }
                    else if($pannel==4)
                    {
                    $m28Size = 4 * $heightFt;
                    $m23Size = 4 * $heightFt;
                    }

              //Fetcing price of all sections first
              $sql3 = "select * from aluminium_section_details where section='M23'  AND color='$color' AND thickness='$thickness'";
              $fire3=mysqli_query($con,$sql3);
              $row3 = mysqli_fetch_array($fire3);


              $m23Price = $row3['price'] * $m23Size;
              echo "<br>";
              echo $m23Price;

              $sql4 = "select * from aluminium_section_details where section='M28'  AND color='$color' AND thickness='$thickness'";
              $fire4=mysqli_query($con,$sql4);
              $row4 = mysqli_fetch_array($fire4);




              $m28Price = $row4['price'] * $m28Size;

              echo "<br>";
              echo $m28Size;
              echo "<br>";
              echo $m28Price;

              $sql5 = "select * from aluminium_section_details where section='M24'  AND color='$color' AND thickness='$thickness'";
              $fire5=mysqli_query($con,$sql5);
              $row5 = mysqli_fetch_array($fire5);

              $m24Size = 2 * $widthFt;
              $m24Price = $row5['price'] * $m24Size;

              echo "<br>";
              echo $m24Price;

              $sql6 = "select * from aluminium_section_details where section='D29'  AND color='$color' AND thickness='$thickness'";
              $fire6=mysqli_query($con,$sql6);
              $row6 = mysqli_fetch_array($fire6);




              $d29Size =  2 * $heightFt  + $widthFt;
              $d29Price = $row6['price'] * $d29Size;

              echo "<br>";
              echo $d29Price;
              echo "<br>";

              $total = 0;

                                      //Calculating  Area
                                      $area = $widthFt * $heightFt;
                                      //Calculating Glass price
                                      $sql7 = "select *from glass_section_details where id='$glass'";
                                      $fire7 = mysqli_query($sql7,$con);
                                      $row7 = mysqli_fetch_array($fire7);
                                      $glassUnit = $row['price'];
                                      $glassPrice = $glassUnit * $area;




                                      $daluminium =  $dc26baPrice + $dc30baPrice + $m23Price + $m28Price + $m24Price + $d29Price ;
                                                  $disc = ($discount * $daluminium) / 100;
                                                 $paluminium = $daluminium - $disc;


              $total = $dc26baPrice + $dc30baPrice + $m23Price + $m28Price + $m24Price + $d29Price +$hardware +$glassPrice +$labour;

              $dtotal = $paluminium +$hardware + $glassPrice + $labour;

                $dperUnit = $dtotal /$area;

              echo "<br>";
              echo $total;
              echo "<br>";

            //  $area = $widthFt * $heightFt;

              $Amount = $total;

              $perUnit =$total / $area ;

              echo " You Total amount is  $Amount ";
              echo "<br>";
              echo " You Total Area is  $area";
              echo "<br>";
              echo " Your Price per unit is $perUnit";


            }
            else if($section==5) //M26
            {
              //Prepration of outer Frame
              $sql1 = "select * from aluminium_section_details where section='M26'  AND color='$color' AND thickness='$thickness'";
              $fire1=mysqli_query($con,$sql1);
              $row1 = mysqli_fetch_array($fire1);

              $m26Size = $widthFt;
              $m26Price = $row1['price'] * $m26Size;
              echo "<br>";
              echo $m26Price;

              $sql2 = "select * from aluminium_section_details where section='M30'  AND color='$color' AND thickness='$thickness'";
              $fire2=mysqli_query($con,$sql2);
              $row2 = mysqli_fetch_array($fire2);


              $m30Size = 2 * $heightFt  + $widthFt;
              $m30Price = $row2['price'] * $m30Size;
              echo "<br>";
              echo $m30Price;

                    //Prepration of  inner Frame
                    if($pannel==2)
                    {
                    $m28Size = 2 * $heightFt;
                      $m23Size = 2 * $heightFt;
                    }
                    else if($pannel==3)
                    {
                    $m28Size = 4 * $heightFt;
                      $m23Size = 2 * $heightFt;
                    }
                    else if($pannel==4)
                    {
                    $m28Size = 4 * $heightFt;
                    $m23Size = 4 * $heightFt;
                    }

              //Fetcing price of all sections first
              $sql3 = "select * from aluminium_section_details where section='M23'  AND color='$color' AND thickness='$thickness'";
              $fire3=mysqli_query($con,$sql3);
              $row3 = mysqli_fetch_array($fire3);


              $m23Price = $row3['price'] * $m23Size;
              echo "<br>";
              echo $m23Price;

              $sql4 = "select * from aluminium_section_details where section='M28'  AND color='$color' AND thickness='$thickness'";
              $fire4=mysqli_query($con,$sql4);
              $row4 = mysqli_fetch_array($fire4);




              $m28Price = $row4['price'] * $m28Size;

              echo "<br>";
              echo $m28Size;
              echo "<br>";
              echo $m28Price;

              $sql5 = "select * from aluminium_section_details where section='M24'  AND color='$color' AND thickness='$thickness'";
              $fire5=mysqli_query($con,$sql5);
              $row5 = mysqli_fetch_array($fire5);

              $m24Size = 2 * $widthFt;
              $m24Price = $row5['price'] * $m24Size;

              echo "<br>";
              echo $m24Price;

              $sql6 = "select * from aluminium_section_details where section='D29'  AND color='$color' AND thickness='$thickness'";
              $fire6=mysqli_query($con,$sql6);
              $row6 = mysqli_fetch_array($fire6);




              $d29Size =  2 * $heightFt  + $widthFt;
              $d29Price = $row6['price'] * $d29Size;

              echo "<br>";
              echo $d29Price;
              echo "<br>";

              $total = 0;


                                      //Calculating  Area
                                      $area = $widthFt * $heightFt;
                                      //Calculating Glass price
                                      $sql7 = "select *from glass_section_details where id='$glass'";
                                      $fire7 = mysqli_query($sql7,$con);
                                      $row7 = mysqli_fetch_array($fire7);
                                      $glassUnit = $row['price'];
                                      $glassPrice = $glassUnit * $area;


                                      $daluminium =  $m26Price + $m30Price + $m23Price + $m28Price + $m24Price + $d29Price;
                                                                                        $disc = ($discount * $daluminium) / 100;
                                                                                       $paluminium = $daluminium - $disc;


              $total = $m26Price + $m30Price + $m23Price + $m28Price + $m24Price + $d29Price +$hardware+$glassPrice+$labour;


              $dtotal = $paluminium +$hardware + $glassPrice + $labour;

                $dperUnit = $dtotal /$area;

              echo "<br>";
              echo $total;
              echo "<br>";

            //  $area = $widthFt * $heightFt;

              $Amount = $total;

              $perUnit =$total / $area ;

              echo " You Total amount is  $Amount ";
              echo "<br>";
              echo " You Total Area is  $area";
              echo "<br>";
              echo " Your Price per unit is $perUnit";


            }


$sql = "insert into quotation(cid,type,pannel,width,height,section,thickness,color,area,amountPer,damountPer,amount,glassID,hardwarePrice,labour,discount,damount) values('$Cid','$type','$pannel','$width','$height','$section','$thickness','$color','$area','$perUnit','$dperUnit','$Amount','$glass','$hardware','$labour','$discount','$dtotal')";
$fire= mysqli_query($con,$sql);
echo "data inserted";

header('location:quotation.php');

}

else if($type==2) //open able
{

  if($section==2 && $section==4 && $section==7) //d42F D 54F D51F
  {
    $w=$width;
    $h=$height;
    $w+=3;
    $h+=3;
    // $widthFt = $width / 12;
    // $heightFt= $height / 12;

    $wf=$w/12;
    $hf=$h/12;
    $widthFt = $wf;
    $heightFt = $hf;
  }
                    //Prepration of outer Frame
                    $sql1 = "select * from aluminium_section_details where section='$section'  AND color='$color' AND thickness='$thickness'";
                    $fire1=mysqli_query($con,$sql1);
                    $row1 = mysqli_fetch_array($fire1);

                    $FrameSize = (2 * $widthFt) + (2 * $heightFt);
                    $FramePrice = $row1['price'] * $FrameSize;

                    $sql2 = "select * from aluminium_section_details where section='D50A'  AND color='$color' AND thickness='$thickness'";
                    $fire2=mysqli_query($con,$sql2);
                    $row2 = mysqli_fetch_array($fire2);

                    $innerPrice = $row2['price'] * $FrameSize;


                          // //Prepration of  inner Frame
                          // if($pannel==2)
                          // {
                          // $m28Size = 2 * $heightFt;
                          //   $m23Size = 2 * $heightFt;
                          // }
                          // else if($pannel==3)
                          // {
                          // $m28Size = 4 * $heightFt;
                          //   $m23Size = 2 * $heightFt;
                          // }
                          // else if($pannel==4)
                          // {
                          // $m28Size = 4 * $heightFt;
                          // $m23Size = 4 * $heightFt;
                          // }



          $total = 0;

                                  //Calculating  Area
                                  $area = $widthFt * $heightFt;
                                  //Calculating Glass price
                                  $sql7 = "select *from glass_section_details where id='$glass'";
                                  $fire7 = mysqli_query($sql7,$con);
                                  $row7 = mysqli_fetch_array($fire7);
                                  $glassUnit = $row['price'];
                                  $glassPrice = $glassUnit * $area;
                                  $daluminium =    $FramePrice+$innerPrice;

                                                                                    $disc = ($discount * $daluminium) / 100;
                                                                                   $paluminium = $daluminium - $disc;


          $total = $FramePrice+$innerPrice+$hardware +$glassPrice +$labour;


                                                $dtotal = $paluminium +$hardware + $glassPrice + $labour;

                                                  $dperUnit = $dtotal /$area;

          echo "<br>";
          echo $total;
          echo "<br>";

        //  $area = $widthFt * $heightFt;

          $Amount = $total;

          $perUnit =$total / $area ;

          echo " You Total amount is  $Amount ";
          echo "<br>";
          echo " You Total Area is  $area";
          echo "<br>";
          echo " Your Price per unit is $perUnit";



  $sql = "insert into quotation(cid,type,pannel,width,height,section,thickness,color,area,amountPer,damountPer,amount,glassID,hardwarePrice,discount,damount) values('$Cid','$type','$pannel','$width','$height','$section','$thickness','$color','$area','$perUnit','$dperUnit','$Amount','$glass','$hardware','$labour','$dtotal')";
  $fire= mysqli_query($con,$sql);
  echo "data inserted";

  header('location:quotation.php');



}
else if($type==3) //fixed
{
  if($section==2 && $section==4 && $section==7) //d42F D 54F D51F
  {
    $w=$width;
    $h=$height;
    $w+=3;
    $h+=3;
    // $widthFt = $width / 12;
    // $heightFt= $height / 12;

    $wf=$w/12;
    $hf=$h/12;
    $widthFt = $wf;
    $heightFt = $hf;
  }
                    //Prepration of outer Frame
                    $sql1 = "select * from aluminium_section_details where section='$section'  AND color='$color' AND thickness='$thickness'";
                    $fire1=mysqli_query($con,$sql1);
                    $row1 = mysqli_fetch_array($fire1);

                    $FrameSize = (2 * $widthFt) + (2 * $heightFt);
                    $FramePrice = $row1['price'] * $FrameSize;

                    $sql2 = "select * from aluminium_section_details where section='D41'  AND color='$color' AND thickness='$thickness'";
                    $fire2=mysqli_query($con,$sql2);
                    $row2 = mysqli_fetch_array($fire2);

                    $innerPrice = $row2['price'] * $FrameSize;


                          // //Prepration of  inner Frame
                          // if($pannel==2)
                          // {
                          // $m28Size = 2 * $heightFt;
                          //   $m23Size = 2 * $heightFt;
                          // }
                          // else if($pannel==3)
                          // {
                          // $m28Size = 4 * $heightFt;
                          //   $m23Size = 2 * $heightFt;
                          // }
                          // else if($pannel==4)
                          // {
                          // $m28Size = 4 * $heightFt;
                          // $m23Size = 4 * $heightFt;
                          // }



          $total = 0;

                                  //Calculating  Area
                                  $area = $widthFt * $heightFt;
                                  //Calculating Glass price
                                  $sql7 = "select *from glass_section_details where id='$glass'";
                                  $fire7 = mysqli_query($sql7,$con);
                                  $row7 = mysqli_fetch_array($fire7);
                                  $glassUnit = $row['price'];
                                  $glassPrice = $glassUnit * $area;
                                  $daluminium =   $FramePrice+$innerPrice;
                                                                                    $disc = ($discount * $daluminium) / 100;
                                                                                   $paluminium = $daluminium - $disc;



          $total = $FramePrice+$innerPrice+$hardware +$glassPrice+$labour;

          $dtotal = $paluminium +$hardware + $glassPrice + $labour;

            $dperUnit = $dtotal /$area;


          echo "<br>";
          echo $total;
          echo "<br>";

        //  $area = $widthFt * $heightFt;

          $Amount = $total;

          $perUnit =$total / $area ;

          echo " You Total amount is  $Amount ";
          echo "<br>";
          echo " You Total Area is  $area";
          echo "<br>";
          echo " Your Price per unit is $perUnit";



  $sql = "insert into quotation(cid,type,pannel,width,height,section,thickness,color,area,amountPer,damountPer,amount,glassID,hardwarePrice,discount,damount) values('$Cid','$type','$pannel','$width','$height','$section','$thickness','$color','$area','$perUnit','$dperUnit','$Amount','$glass','$hardware','$labour','$dtotal')";
  $fire= mysqli_query($con,$sql);
  echo "data inserted";

  header('location:quotation.php');

}
else if($type==4) //door
{


}



 ?>
