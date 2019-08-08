<?php
session_start();
  if ($_SESSION['login']===true){
?>
<!doctype html>
<html lang="sk">

<head>
<?php 
include ("meta.php");
?>
	<?php
$con = mysqli_connect("localhost","menopouzivatela","heslo","databaza");
     mysqli_set_charset($con,"utf8");
     
if (mysqli_connect_errno())
  {
  echo "Problém s napojením na MySQL: " . mysqli_connect_error();
  }

	$zmazat = mysqli_query($con,"DELETE FROM teploty WHERE time < CURRENT_TIMESTAMP - 30*24*3600") or die(mysqli_error($con));
?>

</head>
<?php $stranka = "Teploty";?>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	
	<?php 
include ("menu.php");
?>	
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
							<div class="panel-body">
							<h2><font color="black">História teplôt v čase</font></h2>
								
	  
	  
	<table style="width: 100%;">
									 <tr>
									 <th style="width: 14.28%;">Čas</th>
									 <th style="width: 14.28%;"><?php echo file_get_contents("nazvyperiferii/teplomer1.txt");?></th>
									 <th style="width: 14.28%;"><?php echo file_get_contents("nazvyperiferii/teplomer2.txt");?></th>
									 <th style="width: 14.28%;"><?php echo file_get_contents("nazvyperiferii/teplomer3.txt");?></th>
									 <th style="width: 14.28%;"><?php echo file_get_contents("nazvyperiferii/teplomer4.txt");?></th>
									 <th style="width: 14.28%;"><?php echo file_get_contents("nazvyperiferii/teplomer5.txt");?></th>
									 <th style="width: 14.28%;"><?php echo file_get_contents("nazvyperiferii/teplomer6.txt");?></th>
									 
									 </tr>
<?php
 	$teploty = mysqli_query($con,"SELECT * FROM teploty ORDER BY id DESC") or die(mysqli_error($con));
		while($line = mysqli_fetch_assoc($teploty)){
			echo "<tr>";
       echo "<td><i>". $line['time'] . "</i></td>";
			echo "<td><i>" . $line['teplota1'] . " °C" . "</i></td>";
      echo "<td><i>" . $line['teplota2'] . " °C" . "</i></td>";
	  echo "<td><i>" . $line['teplota3'] . " °C" . "</i></td>";
	  echo "<td><i>" . $line['teplota4'] . " °C" . "</i></td>";
	  echo "<td><i>" . $line['teplota5'] . " °C" . "</i></td>";
	  echo "<td><i>" . $line['teplota6'] . " °C" . "</i></td>";
			echo "</tr>";
		}  ?> </tbody></table>
									
								</div>
							</div>
					
						</div>
						
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="https://www.themeineed.com" target="_blank">Smart Home</a></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
<?php
include ("js_files.php");
?>	
	
</body>

<?php 
include ("js_realtime.php");
?>

</html>
<?php }else{
	header("Location: ../index.php");
	
} ?>
