<?php

  // model 1
  $age =array ("Rijal"=>"19", "Dandry"=>"19","Gian" =>"19");

  
  //print_r($age);


  //echo" umur dari Rijal adalah" .$age["Rijal"];

foreach($age as $p =>$u ){

    echo  $p. " umurnya " . $u;

    echo "<br>";
}