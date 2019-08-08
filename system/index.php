<?php
error_reporting(0);
session_start();
  if ($_SESSION['login']===true){
?>
<!doctype html>
<html lang="sk">

<head>
<?php 
include ("meta.php");
?>
	
</head>
<?php $stranka = "Dashboard";?>
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
									
									<h2>Teploty</h2><table class="table table-striped" style="color: black;">
									
										<thead>
										<tr>
    <th><strong>Umiestnenie</strong></th>
    <th><strong>Hodnota</strong></th>
  </tr>
   <tr>
    <td><h3 ><font color="black"><img src="https://image.flaticon.com/icons/svg/603/603463.svg" width=32px height=32px> <b id="nazovteplomer1"></b></font></h3></td>
    <td id="stavteplota1"> </td>
  </tr>
  <tr>
    <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/603/603463.svg" width=32px height=32px> <b id="nazovteplomer2"></b></font></h3></td>
    <td id="stavteplota2"></td>    

  </tr>
  <tr>
    <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/603/603463.svg" width=32px height=32px> <b id="nazovteplomer3"></b></font></h3></td>
    <td id="stavteplota3">    
   
    
    </td>
   
  </tr>
    <tr>
    <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/603/603463.svg" width=32px height=32px> <b id="nazovteplomer4"></b></font></font></h3></td>
    <td id="stavteplota4">    
   
    
    </td>

  </tr>
    <tr>
    <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/603/603463.svg" width=32px height=32px> <b id="nazovteplomer5"></b></font></h3></td>
    <td id="stavteplota5">    
   
    
    </td>
  </tr>
  <tr>
    <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/603/603463.svg" width=32px height=32px> <b id="nazovteplomer6"> </b></font></h3></td>
    <td id="stavteplota6"></td>
	
  </tr>
   </table><h2>Relé</h2>
   	<table class="table table-striped" style="color: black;">
									
										<thead>
										<tr>
    <th><strong>Názov</strong></th>
	 <th><strong>Režim</strong></th>
    <th><strong>Stav</strong></th>
  </tr>
   <tr>
    <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/149/149040.svg" width=32px height=32px> <b id="nazovrele1"> </b></font></h3></td>
  <td id="rezimrele1"></td>
   <td id="stavrele1"></td>
  </tr>
  
  <tr>
   <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/149/149040.svg" width=32px height=32px> <b id="nazovrele2"> </b></font></h3></td>
    <td id="rezimrele2"></td>
   <td id="stavrele2"></td>
  </tr>
    <tr>
   <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/149/149040.svg" width=32px height=32px> <b id="nazovrele3"> </b></font></h3></td>
  <td id="rezimrele3"></td>
   <td id="stavrele3"></td>
  </tr>
      <tr>
   <td><h3><font color="black"><img src="https://image.flaticon.com/icons/svg/149/149040.svg" width=32px height=32px> <b id="nazovrele4"> </b></font></h3></td>
    <td id="rezimrele4"></td>
   <td id="stavrele4"></td>
  </tr>
   </table>
   <h2>Termostaty</h2>
  	<table class="table table-striped" style="color: black;">
									
										<thead>
										<tr>
    <th><strong>Názov</strong></th>
    <th><strong>Hodnota</strong></th>
	<th><strong>Režim</strong></th>
	<th><strong>Stav</strong></th>
	<th><strong>Referencia</strong></th>
  </tr>
  
     <tr>
    <td><h5><font color="black"><img src="https://image.flaticon.com/icons/svg/550/550965.svg" width=32px height=32px> <b id="nazovtermostat"></b></font></h5></td>
     <td id="teplotaaktual">  </td>
    <td id="termostatrezim"></td>
	<td id="stavtermostat"></td>
	<td id="referenciatermostatu"></td>
    
  </tr>  
  <tr>
    <td><h5><font color="black"><img src="https://image.flaticon.com/icons/svg/550/550965.svg" width=32px height=32px> <b id="nazovtermostat2"></b></font></h5></td>
     <td id="teplotaaktual2">  </td>
    <td id="termostatrezim2"></td>
	<td id="stavtermostat2"></td>
	<td id="referenciatermostatu2"></td>
    
  </tr>  

 </table>
 <h2>Ostatné</h2>
  	<table class="table table-striped" style="color: black;">
									
										<thead>
														<tr>
    <th><strong>Názov</strong></th>
	<th><strong>Režim</strong></th>
	<th><strong>Stav</strong></th>
  </tr>
										<tr>
    <td><font color="black"><h5><img src="https://image.flaticon.com/icons/svg/173/173039.svg" width=32px height=32px> <b>NodeMCU v3 Lolin</b></font></h5></td>
    <td>Client</td>
	<td id="stavnodemcu"></td>
  </tr></table>
 <center><h3><font color="black">Posledný online záznam: </h3><h3 id="poslednateplotacas"></font></h3></center>
										</tbody>
									</table>
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
<?php }else{
	header("Location: ../index.php");
	
} ?>
