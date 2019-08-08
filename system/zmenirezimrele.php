  <?php $day = date("l");
  $rele1 = file_get_contents(__DIR__ . '/values/automanualrele1.txt');
    $rele2 = file_get_contents(__DIR__ . '/values/automanualrele2.txt');
	  $rele3 = file_get_contents(__DIR__ . '/values/automanualrele3.txt');
	    $rele4 = file_get_contents(__DIR__ . '/values/automanualrele4.txt');
		$Monday1 = file_get_contents(__DIR__ . '/rele/Pondelok1.txt');
		$Monday2 = file_get_contents(__DIR__ . '/rele/Pondelok2.txt');
		$Monday3 = file_get_contents(__DIR__ . '/rele/Pondelok3.txt');
		$Monday4 = file_get_contents(__DIR__ . '/rele/Pondelok4.txt');
		$Tuesday1 = file_get_contents(__DIR__ . '/rele/Utorok1.txt');
		$Tuesday2 = file_get_contents(__DIR__ . '/rele/Utorok2.txt');
		$Tuesday3 = file_get_contents(__DIR__ . '/rele/Utorok3.txt');
		$Tuesday4 = file_get_contents(__DIR__ . '/rele/Utorok4.txt');
		$Wednesday1 = file_get_contents(__DIR__ . '/rele/Streda1.txt');
		$Wednesday2 = file_get_contents(__DIR__ . '/rele/Streda2.txt');
		$Wednesday3 = file_get_contents(__DIR__ . '/rele/Streda3.txt');
		$Wednesday4 = file_get_contents(__DIR__ . '/rele/Streda4.txt');
		$Thursday1 = file_get_contents(__DIR__ . '/rele/Stvrtok1.txt');
		$Thursday2 = file_get_contents(__DIR__ . '/rele/Stvrtok2.txt');
		$Thursday3 = file_get_contents(__DIR__ . '/rele/Stvrtok3.txt');
		$Thursday4 = file_get_contents(__DIR__ . '/rele/Stvrtok4.txt');
		$Friday1 = file_get_contents(__DIR__ . '/rele/Piatok1.txt');
		$Friday2 = file_get_contents(__DIR__ . '/rele/Piatok2.txt');
		$Friday3 = file_get_contents(__DIR__ . '/rele/Piatok3.txt');
		$Friday4 = file_get_contents(__DIR__ . '/rele/Piatok4.txt');
		$Saturday1 = file_get_contents(__DIR__ . '/rele/Sobota1.txt');
		$Saturday = file_get_contents(__DIR__ . '/rele/Sobota2.txt');
		$Saturday3 = file_get_contents(__DIR__ . '/rele/Sobota3.txt');
		$Saturday4 = file_get_contents(__DIR__ . '/rele/Sobota4.txt');
		$Sunday1 = file_get_contents(__DIR__ . '/rele/Nedela1.txt');
		$Sunday2 = file_get_contents(__DIR__ . '/rele/Nedela2.txt');
		$Sunday3 = file_get_contents(__DIR__ . '/rele/Nedela3.txt');
		$Sunday4 = file_get_contents(__DIR__ . '/rele/Nedela4.txt');
		$aktualne = date('H:i');
      if($day=="Monday"){
      
      	if($rele1=="Automat"){
		if($Monday1=="Ano"){
   
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele1.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele1.txt", "VYP");	
			}
      }
      } if($rele2=="Automat"){ 
       if($Monday2=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele2.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele2.txt", "VYP");	
			} }
      
      
       } if($rele3=="Automat"){ 
       if($Monday3=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele3.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele3.txt", "VYP");	
			} }
      
      
       } if($rele4=="Automat"){ 
       if($Monday4=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele4.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele4.txt", "VYP");	
			} }
      
      
       } 
       }else if($day=="Tuesday"){
      
      	if($rele1=="Automat"){
         echo 'Splnena podmienka pre rele 1';
		if($Tuesday1=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele1.txt", "ZAP");
     echo 'Zapinaj rele';
			}else{
				
			 file_put_contents("values/stavrele1.txt", "VYP");	
          echo 'Vypinaj rele';
			}
      }
      } if($rele2=="Automat"){ 
       echo 'Automat rele 2';
       if($Tuesday2=="Ano"){
         echo 'Povolena automatika rele2';
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele2.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele2.txt", "VYP");	
			} }
      
      
       } if($rele3=="Automat"){ 
       echo 'Automat rele 3';
       if($Tuesday3=="Ano"){           
      
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele3.txt", "ZAP");
      echo 'Splnena podmienka pre rele 3 zapinam';
			}else{
				
			 file_put_contents("values/stavrele3.txt", "VYP");	
        echo 'Splnena podmienka pre rele 3 vypinam';
			} }
      
      
       } if($rele4=="Automat"){ 
       if($Tuesday4=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele4.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele4.txt", "VYP");	
			} }
      
      
       } 
       }else if($day=="Wednesday"){
      
      	if($rele1=="Automat"){
		if($Wednesday1=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele1.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele1.txt", "VYP");	
			}
      }
      } if($rele2=="Automat"){ 
       if($Wednesday2=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele2.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele2.txt", "VYP");	
			} }
      
      
       } if($rele3=="Automat"){ 
       if($Wednesday3=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele3.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele3.txt", "VYP");	
			} }
      
      
       }  if($rele4=="Automat"){ 
       if($Wednesday4=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele4.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele4.txt", "VYP");	
			} }
      
      
       } 
       }else if($day=="Thursday"){
      
      	if($rele1=="Automat"){
		if($Thursday1=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele1.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele1.txt", "VYP");	
			}
      }
      } if($rele2=="Automat"){ 
       if($Thursday2=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele2.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele2.txt", "VYP");	
			} }
      
      
       } if($rele3=="Automat"){ 
       if($Thursday3=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele3.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele3.txt", "VYP");	
			} }
      
      
       }  if($rele4=="Automat"){ 
       if($Thursday4=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele4.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele4.txt", "VYP");	
			} }
      
      
       } 
       } else if($day=="Friday"){
      
      	if($rele1=="Automat"){
		if($Friday1 =="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele1.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele1.txt", "VYP");	
			}
      }
      } if($rele2=="Automat"){ 
       if($Friday2=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele2.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele2.txt", "VYP");	
			} }
      
      
       } if($rele3=="Automat"){ 
       if($Friday3=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele3.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele3.txt", "VYP");	
			} }
      
      
       }  if($rele4=="Automat"){ 
       if($Friday4=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele4.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele4.txt", "VYP");	
			} }
      
      
       } 
       }
       else if($day=="Saturday"){
      
      	if($rele1=="Automat"){
		if($Saturday1 =="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele1.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele1.txt", "VYP");	
			}
      }
      } if($rele2=="Automat"){ 
       if($Saturday2=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele2.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele2.txt", "VYP");	
			} }
      
      
       } if($rele3=="Automat"){ 
       if($Saturday3=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele3.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele3.txt", "VYP");	
			} }
      
      
       } if($rele4=="Automat"){ 
       if($Saturday4=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele4.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele4.txt", "VYP");	
			} }
      
      
       } 
       }else if($day=="Sunday"){
      
      	if($rele1=="Automat"){
		if($Sunday1 =="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele1.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele1.txt", "VYP");	
			}
      }
      } if($rele2=="Automat"){ 
       if($Sunday1=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele2.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele2.txt", "VYP");	
			} }
      
      
       } if($rele3=="Automat"){ 
       if($Sunday1=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele3.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele3.txt", "VYP");	
			} }
      
      
       }  if($rele4=="Automat"){ 
       if($Sunday1=="Ano"){
					if(($aktualne>"06:00")&&($aktualne<"18:00")){
		 file_put_contents("values/stavrele4.txt", "ZAP");
			}else{
				
			 file_put_contents("values/stavrele4.txt", "VYP");	
			} }
      
      
       } 
       }
  
  
  ?>