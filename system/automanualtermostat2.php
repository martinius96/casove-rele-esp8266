<?php
    
  $hodnota = file_get_contents(__DIR__ . '/values/automanualtermostat2.txt');
   if($hodnota === "Automat"){
  echo 'Automatické ovládanie';
   }else if($hodnota === "Manual"){
  echo 'Manuálne ovládanie';
   }
   
?>