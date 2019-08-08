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
 <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }

			label {
				display: inline-block;
				width: 100px;
				height: 30px;
				border: 3px solid rgba(0,0,0,0.07);
				border-radius: 17px;
				position: relative;
				box-shadow:  inset 1px 1px 1px 1px rgba(0,0,0,0.4), 0px 0px 0px 1px rgba(0,0,0,0.1), 0px 0px 0px 2px rgba(0,0,0,0.1), 0px 0px 4px 2px rgba(0,0,0,0.07);
			}
		
			input[type=checkbox] {
				display: none;
			}
			
			input:checked ~ a {
				left: 50%;
			}
			
			input:checked ~ div span {
				background-color: rgba(0,158,255,0.5);
			}
			
			label div {
			}
			
			label span {
				z-index: 1;
				position: absolute;
				display: inline-block;
				height: 28px;
				left: 0;
				width: 49%;
				border-radius: 15px 0px 0px 15px;
				border-color: rgba(0,0,0,0.1);
				border-style: solid;
				border-width: 1px 0px 1px 1px;
				background-color: rgba(200,200,200,0.5);
				background-image:-webkit-linear-gradient(90deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
				text-align: center;
				line-height: 30px;
				font-family: helvetica, sans-serif;
				font-size: 14px;
				font-weight: 800;
				color: #555;
				text-shadow: 0px 1px white;
				-webkit-transition: all 1.0s ease-in-out;
				-moz-transition: all 1.0s ease-in-out;
				transition: all 1.0s ease-in-out;
				

			}

			label span.no {

				left: 50%;	
				border-radius: 0px 15px 15px 0px;			
				border-width: 1px 1px 1px 0px;

			}
			
			.slider {
				display: inline-block;
				position: absolute;
				width: 50%;
				height: 28px;
				background-color: #efefef;
				left: 0%;
				border-radius: 30px;
				z-index: 2;
				border: 1px solid rgba(0,0,0,0.2);
				box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.1), 0px 1px 1px 0px rgba(0,0,0,0.2);
				-webkit-transition: all 0.5s ease-in-out;
				-moz-transition: all 0.5s ease-in-out;
				transition: all 0.5s ease-in-out;

			}
			
			.slider:after, .slider:before {
				content: "";
				width: 30%;
				height: 25px;
				position: absolute;
				top: 2px;
				border-radius: 50%;
			}

			.slider:after {
				left: 15%;
				background-image:-webkit-linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
			}
			.slider:before {
				right: 15%;
				background-image:-webkit-linear-gradient(0deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
			}

			/* fluff */
			


			
			form {
				width: 250px;
				margin: 0px auto;
				margin-top: 20px;
				font-family: georgia, times, serif;
				box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.2);
				border-radius: 5px;
				padding: 25px;
				background-color: #fff;
			}
			
			fieldset {
				border: 1px solid #ccc;
				padding: 20px;
				text-align: center;
				border-radius: 3px;
				color: #666;
				margin-bottom: 20px;
			}

		
			h1 {
				background-color: rgba(0,158,255,0.5);
				margin: -25px -25px 25px -25px;
				padding: 10px;
				border-radius: 5px 5px 0px 0px;
				text-align: center;
				font-family: 'Helvetica Neue', Helvetica, sans-serif;
				font-weight: 500;
				letter-spacing: 1px;
				color: #fff;
				background-image: -webkit-linear-gradient(90deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
				text-shadow: 0px 2px 0px rgba(0,0,0,0.5);

			}
  </style>	
</head>
<?php $stranka = "Rele";?>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	
	<?php 
include ("menu.php"); 
  if(isset($_POST["rele1"])) {
    if(file_get_contents("values/stavrele1.txt") === "ZAP") {
      file_put_contents("values/stavrele1.txt", "VYP");
    }
    else { 
      file_put_contents("values/stavrele1.txt", "ZAP");
    }
  }

  if(isset($_POST["rele2"])) {
    if(file_get_contents("values/stavrele2.txt") === "ZAP") {
      file_put_contents("values/stavrele2.txt", "VYP");
    }
    else { 
      file_put_contents("values/stavrele2.txt", "ZAP");
    }
  }
  
  
   if(isset($_POST["rele3"])) {
    if(file_get_contents("values/stavrele3.txt") === "ZAP") {
      file_put_contents("values/stavrele3.txt", "VYP");
    }
    else { 
      file_put_contents("values/stavrele3.txt", "ZAP");
    }
  }
   if(isset($_POST["rele4"])) {
    if(file_get_contents("values/stavrele4.txt") === "ZAP") {
      file_put_contents("values/stavrele4.txt", "VYP");
    }
    else { 
      file_put_contents("values/stavrele4.txt", "ZAP");
    }
  }
  
  

?>	
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
					
							<!-- TABLE STRIPED -->
							<div class="panel">
							<div class="panel-body">
								<h2><font color="black">Ovládanie relé</font></h2>
							
							
							
							
							
							

      							<div class="row">
  <div class="col-md-6">
   <center > <?php echo file_get_contents("nazvyperiferii/rele1.txt");?><br>
<?php  $hodnota = file_get_contents(__DIR__ . '/values/automanualrele1.txt');
  if($hodnota=="Automat"){
?><b>Aktuálny stav: </b><?php echo file_get_contents("values/stavrele1.txt");?><br>
 <a href="zmennamanualrele1.php" class="btn btn-danger">Zmeniť na manual</a>
 <?php }else if($hodnota=="Manual"){?>
  <a href="zmenanaautorele1.php" class="btn btn-success">Zmeniť na auto</a>
  	  <form method="post" id="rele1f" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="hidden" name="rele1" value="yes">
  <fieldset>
		<legend><?php echo file_get_contents("nazvyperiferii/rele1.txt");
?></legend>
		<label onClick="document.getElementById('rele1f').submit();">
			<input name="releon" type="checkbox" <?php if(file_get_contents("values/stavrele1.txt") === "ZAP") echo "checked"; ?>>
			<div>
				<span class="yes">ZAP</span>                                              
				<span class="no">VYP</span>
			</div>         
    
			<a class="slider"></a>
		</label>	
	</fieldset>
  
   </form></center>
	
 <?php  }  ?>

   </div>
  <div class="col-md-6">
   
 <center > <?php echo file_get_contents("nazvyperiferii/rele2.txt");?><br>
<?php  $hodnota = file_get_contents(__DIR__ . '/values/automanualrele2.txt');
  if($hodnota=="Automat"){
?><b>Aktuálny stav: </b><?php echo file_get_contents("values/stavrele2.txt");?><br>
 <a href="zmennamanualrele2.php" class="btn btn-danger">Zmeniť na manual</a>
 <?php }else if($hodnota=="Manual"){?>
  <a href="zmenanaautorele2.php" class="btn btn-success">Zmeniť na auto</a>
  	  <form method="post" id="rele2f" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="hidden" name="rele2" value="yes">
  <fieldset>
		<legend><?php echo file_get_contents("nazvyperiferii/rele2.txt");
?></legend>
		<label onClick="document.getElementById('rele2f').submit();">
			<input name="releon" type="checkbox" <?php if(file_get_contents("values/stavrele2.txt") === "ZAP") echo "checked"; ?>>
			<div>
				<span class="yes">ZAP</span>                                              
				<span class="no">VYP</span>
			</div>         
    
			<a class="slider"></a>
		</label>	
	</fieldset>
  
   </form></center>
	
 <?php  }  ?>

  </div>
   	<div class="row">
  <div class="col-md-6">      <center > <?php echo file_get_contents("nazvyperiferii/rele3.txt");?><br>
<?php  $hodnota = file_get_contents(__DIR__ . '/values/automanualrele3.txt');
  if($hodnota=="Automat"){
  
?><b>Aktuálny stav: </b><?php echo file_get_contents("values/stavrele3.txt");?><br>
 <a href="zmennamanualrele3.php" class="btn btn-danger">Zmeniť na manual</a>
 <?php }else if($hodnota=="Manual"){?>
  <a href="zmenanaautorele3.php" class="btn btn-success">Zmeniť na auto</a>
  	  <form method="post" id="rele3f" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="hidden" name="rele3" value="yes">
  <fieldset>
		<legend><?php echo file_get_contents("nazvyperiferii/rele3.txt");
?></legend>
		<label onClick="document.getElementById('rele3f').submit();">
			<input name="releon" type="checkbox" <?php if(file_get_contents("values/stavrele3.txt") === "ZAP") echo "checked"; ?>>
			<div>
				<span class="yes">ZAP</span>                                              
				<span class="no">VYP</span>
			</div>         
    
			<a class="slider"></a>
		</label>	
	</fieldset>
  
   </form></center>
	
 <?php  }  ?></div>
				
  <div class="col-md-6">      <center > <?php echo file_get_contents("nazvyperiferii/rele4.txt");?><br>
<?php  $hodnota = file_get_contents(__DIR__ . '/values/automanualrele4.txt');
  if($hodnota=="Automat"){
?><b>Aktuálny stav: </b><?php echo file_get_contents("values/stavrele4.txt");?><br>
 <a href="zmennamanualrele4.php" class="btn btn-danger">Zmeniť na manual</a>
 
 <?php }else if($hodnota=="Manual"){?>
  <a href="zmenanaautorele4.php" class="btn btn-success">Zmeniť na auto</a>
  	  <form method="post" id="rele4f" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="hidden" name="rele4" value="yes">
  <fieldset>
		<legend><?php echo file_get_contents("nazvyperiferii/rele4.txt");
?></legend>
		<label onClick="document.getElementById('rele4f').submit();">
			<input name="releon" type="checkbox" <?php if(file_get_contents("values/stavrele4.txt") === "ZAP") echo "checked"; ?>>
			<div>
				<span class="yes">ZAP</span>                                              
				<span class="no">VYP</span>
			</div>         
    
			<a class="slider"></a>
		</label>	
	</fieldset>
  
   </form></center>
	
 <?php  }  ?></div>

</div>
							


	
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
