<?php

	$hodnota = file_get_contents(__DIR__ . '/values/automanualtermostat.txt');
	$teplota = file_get_contents(__DIR__ . '/values/teplota1.txt');
	$referencia = file_get_contents(__DIR__ . '/values/nastavenytermostat.txt');
	if($hodnota === "Automat")
	{?>

		<a href="zmennamanualtermostat.php" class="btn btn-warning">Zmeniť na manual</a>
 
		<?php 
		if($teplota == 'NaN')
		{
			file_put_contents(__DIR__ . '/values/termostat.txt', "VYP");
		}
		else
		{
			//rozdiel = nastavena teplota termostatu - aktualna namerana
			$rozdiel = $referencia-$teplota;

			if($rozdiel>1)
			{
				file_put_contents(__DIR__ . '/values/termostat.txt', "VYP");
		
			}
			else if($rozdiel<-1)
			{
				file_put_contents(__DIR__ . '/values/termostat.txt', "ZAP");
			}
			
		}
       
	}
	else if($hodnota === "Manual")
	{?>
    	<a href="zmennaautotermostat.php" class="btn btn-success">Zmeniť na automat</a>&nbsp;
		<?php   
		
		$zapvyp = file_get_contents(__DIR__ . '/values/termostat.txt');  
        
		if($zapvyp==="ZAP")
		{
    echo'<a href="vyptermostat.php" class="btn btn-danger">Vypnúť</a>&nbsp;Termostat: ZAP';
        }
		else if($zapvyp==="VYP")
		{
		echo'<a href="zaptermostat.php" class="btn btn-danger">Zapnúť</a>&nbsp;Termostat: VYP';
		
		}

	}
   
?>