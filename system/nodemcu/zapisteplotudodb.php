<?php
$con = mysqli_connect("localhost","pouzivatel","heslo","nazovdb");
     mysqli_set_charset($con,"utf8");
                             
if (mysqli_connect_errno())
  {
  echo "Probl�m s napojen�m na MySQL: " . mysqli_connect_error();
  }
  
 $teplota1 = $_GET["teplota1"];
 $teplota2 = $_GET["teplota2"];
$teplota3 = $_GET["teplota3"];
$teplota4 = $_GET["teplota4"];
$teplota5 = $_GET["teplota5"];
$teplota6 = $_GET["teplota6"];


 
 $ins = mysqli_query($con,"INSERT INTO `teploty` (`teplota1`,`teplota2`,`teplota3`,`teplota4`,`teplota5`,`teplota6`) VALUES ('$teplota1', '$teplota2', '$teplota3', '$teplota4', '$teplota5', '$teplota6')") or die (mysqli_error($con));
     
 
 


 
?>