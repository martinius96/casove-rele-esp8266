<!doctype html>
<html lang="sk">

<head>
<?php 
include ("meta.php");
?>
	
</head>
<?php $stranka = "Termostat";?>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	
	<?php 
include ("menu.php");
?>	
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
		<style>
		#pizza {
  max-width:600px;
  margin: 0;
  background-image:url(https://subtlepatterns.com/patterns/purty_wood.png);
  box-sizing:border-box;
  padding: 24px 30px 14px 30px;
  border-radius:8px 8px 0 0;
  background-color:#EAC995;
  border:1px solid #EAC995;
  box-shadow: inset 0 0 20px rgba(0,0,0,0.4);
}
input, .button {
  margin-top:10px;
  border:none;
  margin-right:10px;
  display: block;
  background-color: #1B79C7;
  color: white;
  text-shadow: 0px -1px 0px #0C3658;
  border-radius: 4px;
  box-shadow: 0px 3px 0px #0C3658, 0px 3px 14px rgba(0,0,0,0.6);
  transition: background-color 0.1s ease;
  font-family: 'Open Sans', sans-serif;
  font-weight:600;
  font-size:14px;
}
input:hover, .button:hover {
  background-color: #2E92E2;
}
input:active, .button:active {  
  bottom: -2px;
  box-shadow: 0px 1px 0px #0C3658, 0px 2px 14px rgba(0,0,0,0.6);
  color: white;
}
#table {
  max-width:600px;
  margin:40px auto 20px auto;
  border-radius:8px;
  box-shadow: 0px 2px 20px rgba(0,0,0,0.5);
}
#pizza:after {
    content: '';
    display: table;
    clear: both;
}
#table a {
  color:#FFF;
  text-decoration:underline;
}
  
		
		</style>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
							<div class="panel-body">
				
		<hr>	   	<center><h2><?php echo file_get_contents("nazvyperiferii/termostat.txt");?></h2></center> <hr>

  
  					      <table>
               <tr>
               <td id="manualautomattermostat">
               </td>
               <td id="zmenitrezimtermostat">
               </td>
               
               </tr>
               </table>
  
<center>  <h2 id="stavteplotatermostatu">
               </h2>


 <?php if(isset($_POST['nastavtermostat'])){
  	$hodnotatermostatu = $_POST['hodnotatermostatu'];
	file_put_contents(__DIR__ . '/values/nastavenytermostat.txt', $hodnotatermostatu);
	
	
  }?>
   <?php if(isset($_POST['nastavtermostat2'])){
  	$hodnotatermostatu2 = $_POST['hodnotatermostatu2'];
	file_put_contents(__DIR__ . '/values/nastavenytermostat2.txt', $hodnotatermostatu2);
	
	
  }?>
  <div id="table" style="width:200px;">
<div id="pizza">
 <form action="termostat.php" method="post">
 <center><input type="number" min="5" max="60" step="0.5" value="<?php echo file_get_contents("values/nastavenytermostat.txt");?>" name="hodnotatermostatu" required style="text-align:center;"><br></center>
<center><input type="submit" name="nastavtermostat" value="Nastaviť"></center>
</form>
</div>
 

 </center>

   
			  <hr> 	<center><h2><?php echo file_get_contents("nazvyperiferii/termostat2.txt");?></h2></center> <hr>

  
   <table>
               <tr>
               <td id="manualautomattermostat2">
               </td>
               <td id="zmenitrezimtermostat2">
               </td>
               
               </tr>
               </table>
  
<center>  <h2 id="stavteplotatermostatu2">
               </h2>



  <div id="table" style="width:200px;">
<div id="pizza">
 <form action="termostat.php" method="post">
 <center><input type="number" min="5" max="60" step="0.5" value="<?php echo file_get_contents("values/nastavenytermostat2.txt");?>" name="hodnotatermostatu2" required style="text-align:center;"><br></center>
<center><input type="submit" name="nastavtermostat2" value="Nastaviť"></center>
</form>
</div>
 

 </center>
 
									
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
<script>
       setInterval(function(){
    $.get('get_cas.php', function(data){
        $('#poslednateplotacas').text(data)
    });
},2000);   
</script>
<?php 
include ("js_realtime.php");
?>

</html>
