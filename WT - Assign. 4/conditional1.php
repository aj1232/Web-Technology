<?php

   $units = $_POST['units'];

   if($units <= 50)
   {
       $bill = $units * 3.50;
       echo "Electricity used ".$units." Bill is : ".$bill;
   }
   elseif($units > 50 and $units <= 150)
   {
       $bill = $units * 4.00;
       echo "Electricity used ".$units." Bill is : ".$bill;
   }
   elseif($units > 150 and $units <= 250)
   {
       $bill = $units * 5.20;
       echo "Electricity used ".$units." Bill is : ".$bill;
   }
   else
   {
       $bill = $units * 6.50;
       echo "Electricity used ".$units." Bill is : ".$bill;
   }
   
?>