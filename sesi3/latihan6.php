<?php

    $mhs =array(
         array (" Andika ", " 1212121212 ", " Denpasar "),
         array (" Wahyu " ," 3214321234 " ," Manado "),
         array (" Susanti ", " 1324123456 ", " Jakarta "),
         array (" Fizi ", " 1678543213 ", " Malang "),
    );


    foreach($mhs as  $idx => $data){

         echo "Data ke-".$idx. "<br>";
         foreach ($data as $nval ){

           echo $nval. "<br>"; 

         }
         echo "<br>";
    }