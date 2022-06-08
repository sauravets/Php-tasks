<?php
   $numbers = range(1, 10000000);
   //shuffle($numbers);
   $units = ['w', 'd', 'h'];
   
   foreach ($numbers as $number) {
       foreach($units as $unit) {
           $natural =  "$number$unit";
           $converted = (int) "$number$unit";
           
           if ( $natural !== $converted . $unit ) {
               var_dump($natural, $converted);
               die();
           }
       }
   }