<?php
$today = date("Y-m-d H:i:s");
$was = date("Y-m-d H:i:s.",filemtime(__DIR__ . "/values/teplota1.txt"));
$vypocet =(strtotime($today)-strtotime($was));
if($vypocet>=350){
	  echo "<img src='img/reject.png' title='Odpojené'>" ;
	  	
}else{
 echo "<img src='img/checked.jpg' title='Pripojené'>";
	
} 
?>