<?php
 $teplota1 = $_GET["teplota1"];
 $teplota2 = $_GET["teplota2"];
$teplota3 = $_GET["teplota3"];
$teplota4 = $_GET["teplota4"];
$teplota5 = $_GET["teplota5"];
$teplota6 = $_GET["teplota6"];

/*$debug = file_get_contents("../values/teploty.txt");     
       $debug .= "Prijate teploty: Teplota1=".$teplota1." a teplota2=".$teplota2." a teplota3=".$teplota3." a teplota4=".$teplota4." a teplota5=".$teplota5." a teplota6=".$teplota6."\r\n";
      file_put_contents("../values/teploty.txt",$debug);*/

if($teplota1 == "" || $teplota1 == "-127" || $teplota1 == "-127.00" || $teplota1 == "85.00"  || $teplota1 == "85") {
file_put_contents('../values/teplota1.txt', 'NaN');
	
} else {
file_put_contents('../values/teplota1.txt', $teplota1);
	
}
if($teplota2 == "" || $teplota2 == "-127" || $teplota2 == "-127.00" || $teplota2 == "85.00" || $teplota2 == "85") {
file_put_contents('../values/teplota2.txt', 'NaN');
	
} else {
file_put_contents('../values/teplota2.txt', $teplota2);
	
}
if($teplota3 == "" || $teplota3 == "-127" || $teplota3 == "-127.00" || $teplota3 == "85.00" || $teplota3 == "85") {
file_put_contents('../values/teplota3.txt', 'NaN');
	
} else {
 file_put_contents('../values/teplota3.txt', $teplota3);
	
}
if($teplota4 == "" || $teplota4 == "-127" || $teplota4 == "-127.00" || $teplota4 == "85.00" || $teplota4 == "85") {
file_put_contents('../values/teplota4.txt', 'NaN');
	
} else {
file_put_contents('../values/teplota4.txt', $teplota4);
	
}
if($teplota5 == "" || $teplota5 == "-127" || $teplota5 == "-127.00" || $teplota5 == "85.00" || $teplota5 == "85") {
file_put_contents('../values/teplota5.txt', 'NaN');
	
} else {
  file_put_contents('../values/teplota5.txt', $teplota5);
	
}
if($teplota6 == "" || $teplota6 == "-127" || $teplota6 == "-127.00" || $teplota6 == "85.00" || $teplota6 == "85") {
	file_put_contents('../values/teplota6.txt', 'NaN');
	
} else {
 file_put_contents('../values/teplota6.txt', $teplota6);
	
}

 
 
 
 


 
?>