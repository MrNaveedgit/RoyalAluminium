<?php

if(isset($_POST['createQuotation']))
{
   $type=trim($_POST['type']);

   $width=trim($_POST['width']);

   $height=trim($_POST['height']);

   $section=trim($_POST['section']);

   $thickness=trim($_POST['thickness']);

   $widthInch = $width / 12;
   $heightInch = $height / 12;

   // echo $widthInch;
   // echo "<br>";
   // echo $heightInch;

if($type==1) //sliding
{
        if($section==1) //DC 26 B
        {
            if($thickness==1) //1.2mm
            {
                if($color=='DULL')
                {
                  $sql = "select * from section_details where section='DC26B'  AND color='DULL' AND thickness='1.2'";
                }
                else if($color=='BROWN')
                {

                }
                else if($color=='SAHARA')
                {

                }
                else if($color=='WOOD')
                {

                }
            }
            else if($thickness==2) //1.6mm
            {
              if($color=='DULL')
              {

              }
              else if($color=='BROWN')
              {

              }
              else if($color=='SAHARA')
              {

              }
              else if($color=='WOOD')
              {

              }

            }
            else if($thickness==3) //2.0mm
            {
              if($color=='DULL')
              {

              }
              else if($color=='BROWN')
              {

              }
              else if($color=='SAHARA')
              {

              }
              else if($color=='WOOD')
              {

              }
            }


        }
        else if($section==2)  //DC 26 C
        {
          if($thickness==1) //1.2mm
          {
              if($color=='DULL')
              {

              }
              else if($color=='BROWN')
              {

              }
              else if($color=='SAHARA')
              {

              }
              else if($color=='WOOD')
              {

              }
          }
          else if($thickness==2) //1.6mm
          {
            if($color=='DULL')
            {

            }
            else if($color=='BROWN')
            {

            }
            else if($color=='SAHARA')
            {

            }
            else if($color=='WOOD')
            {

            }

          }
          else if($thickness==3) //2.0mm
          {
            if($color=='DULL')
            {

            }
            else if($color=='BROWN')
            {

            }
            else if($color=='SAHARA')
            {

            }
            else if($color=='WOOD')
            {

            }
          }


        }
        else if($section==3)  //DC 26 F
        {
          if($thickness==1) //1.2mm
          {
              if($color=='DULL')
              {

              }
              else if($color=='BROWN')
              {

              }
              else if($color=='SAHARA')
              {

              }
              else if($color=='WOOD')
              {

              }
          }
          else if($thickness==2) //1.6mm
          {
            if($color=='DULL')
            {

            }
            else if($color=='BROWN')
            {

            }
            else if($color=='SAHARA')
            {

            }
            else if($color=='WOOD')
            {

            }

          }
          else if($thickness==3) //2.0mm
          {
            if($color=='DULL')
            {

            }
            else if($color=='BROWN')
            {

            }
            else if($color=='SAHARA')
            {

            }
            else if($color=='WOOD')
            {

            }
          }

        }

        else if($section==4)  //DC 26 BA
        {
          if($thickness==1) //1.2mm
          {
              if($color=='DULL')
              {

              }
              else if($color=='BROWN')
              {

              }
              else if($color=='SAHARA')
              {

              }
              else if($color=='WOOD')
              {

              }
          }
          else if($thickness==2) //1.6mm
          {
            if($color=='DULL')
            {

            }
            else if($color=='BROWN')
            {

            }
            else if($color=='SAHARA')
            {

            }
            else if($color=='WOOD')
            {

            }

          }
          else if($thickness==3) //2.0mm
          {
            if($color=='DULL')
            {

            }
            else if($color=='BROWN')
            {

            }
            else if($color=='SAHARA')
            {

            }
            else if($color=='WOOD')
            {

            }
          }

        }


}
else if($type==2) //open able
{


}
else if($type==3) //fixed
{


}
else if($type==4) //door
{


}


}
 ?>
