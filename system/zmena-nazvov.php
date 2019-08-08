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
<?php $stranka = "Zmena";?>
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
							<h2><font color="black">Zmena názvov teplomerov</font></h2>
									 <table style="width: 100%;">
       <tr>
               <td>
               
            <?php     if(isset($_POST['zmenteplotu1'])){
       $teplota1 = $_POST['teplota1'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/teplomer1.txt', $teplota1);
  }
           ?>
               
               
               
             <center>  <form method="post" action="zmena-nazvov.php">
             <input name="teplota1" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/teplomer1.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenteplotu1" class="btn btn-info" value="Zmeniť">    </form>    </center>
               
               </td>
              
               <td>
               
            <?php     if(isset($_POST['zmenteplotu2'])){
       $teplota2 = $_POST['teplota2'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/teplomer2.txt', $teplota2);
  }
           ?>
               
               
               
             <center>   <form method="post" action="zmena-nazvov.php">
                <input name="teplota2" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/teplomer2.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenteplotu2" class="btn btn-info" value="Zmeniť">          </form>    </center>
               
               </td>   
               </tr>
                  <tr>
              
            
                   <td>
               
            <?php     if(isset($_POST['zmenteplotu3'])){
       $teplota3 = $_POST['teplota3'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/teplomer3.txt', $teplota3);
  }
           ?>
               
               
               
               <center> <form method="post" action="zmena-nazvov.php">
                <input name="teplota3" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/teplomer3.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenteplotu3" class="btn btn-primary" value="Zmeniť">          </form>     </center>
               
               </td>
                 <td>
               
            <?php     if(isset($_POST['zmenteplotu4'])){
       $teplota4 = $_POST['teplota4'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/teplomer4.txt', $teplota4);
  }
           ?>
               
               
               
             <center>   <form method="post" action="zmena-nazvov.php">
                <input name="teplota4" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/teplomer4.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenteplotu4" class="btn btn-primary" value="Zmeniť">          </form>      </center>
               
               </td>
               </tr>
      
      
              
                  <tr>
                 <td>
               
            <?php     if(isset($_POST['zmenteplotu5'])){
       $teplota5 = $_POST['teplota5'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/teplomer5.txt', $teplota5);
  }
           ?>
               
               
               
              <center> <form method="post" action="zmena-nazvov.php">
                <input name="teplota5" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/teplomer5.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenteplotu5" class="btn btn-success" value="Zmeniť">          </form>     </center>
               
               </td>
               
             <td>
               
            <?php     if(isset($_POST['zmenteplotu6'])){
       $teplota6 = $_POST['teplota6'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/teplomer6.txt', $teplota6);
  }
           ?>
               
               
               
              <center>  <form method="post" action="zmena-nazvov.php">
                <input name="teplota6" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/teplomer6.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenteplotu6" class="btn btn-success" value="Zmeniť">          </form>     </center>
               
               </td>   
               </tr>
			   </table>
			   <h2><font color="black">Zmena názvov ovládaných relé</font></h2>
         <table style="width: 100%;">
		       <tr>
            
		     <td>
				
                         <?php     if(isset($_POST['zmentermostat'])){
       $termostat = $_POST['termostat'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/termostat.txt', $termostat);
  }
           ?>
               
               
               
              <center>  <form method="post" action="zmena-nazvov.php">
                <input name="termostat" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/termostat.txt");
?>" type="text" required><br>
               <input type="submit" name="zmentermostat" class="btn btn-danger" value="Zmeniť">          </form>     </center>
                 </td> 
				 
				 <td>
				   <?php     if(isset($_POST['zmentermostat2'])){
       $termostat2 = $_POST['termostat2'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/termostat2.txt', $termostat2);
  }
           ?>
               
               
               
              <center>  <form method="post" action="zmena-nazvov.php">
                <input name="termostat2" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/termostat2.txt");
?>" type="text" required><br>
               <input type="submit" name="zmentermostat2" class="btn btn-danger" value="Zmeniť">          </form>     </center>
                 </td></tr>
				 <tr>
				 
                  <td>
                         <?php     if(isset($_POST['zmenrele1'])){
       $rele1 = $_POST['rele1'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/rele1.txt', $rele1);
  }
           ?>
               
               
               
              <center>  <form method="post" action="zmena-nazvov.php">
                <input name="rele1" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/rele1.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenrele1" class="btn btn-warning" value="Zmeniť">          </form>     </center>
                 </td>
                  
                  <td>
				   <?php     if(isset($_POST['zmenrele2'])){
       $rele2 = $_POST['rele2'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/rele2.txt', $rele2);
  }
           ?>
               
               
               
              <center>  <form method="post" action="zmena-nazvov.php">
                <input name="rele2" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/rele2.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenrele2" class="btn btn-warning" value="Zmeniť">          </form>     </center>
                 </td></tr><tr>
                 <td> 
                 
				  
				   <?php     if(isset($_POST['zmenrele3'])){
       $rele3 = $_POST['rele3'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/rele3.txt', $rele3);
  }
           ?>
               
               
               
              <center>  <form method="post" action="zmena-nazvov.php">
                <input name="rele3" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/rele3.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenrele3" class="btn btn-success" value="Zmeniť">          </form>     </center>
                 </td>
                  
               
				  <td>
				   <?php     if(isset($_POST['zmenrele4'])){
       $rele4 = $_POST['rele4'];
                   
 file_put_contents(__DIR__ . '/nazvyperiferii/rele4.txt', $rele4);
  }
           ?>
               
               
               
              <center>  <form method="post" action="zmena-nazvov.php">
                <input name="rele4" style="text-align: center" placeholder="<?php echo file_get_contents("nazvyperiferii/rele4.txt");
?>" type="text" required><br>
               <input type="submit" name="zmenrele4" class="btn btn-success" value="Zmeniť">          </form>     </center>
                 </td> 
				</tr><tr>
                  
               

               
               
              
               
               
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
