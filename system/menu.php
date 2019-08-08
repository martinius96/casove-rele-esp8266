<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><img src="https://image.flaticon.com/icons/svg/148/148795.svg" width=32px height=32px></button>
				</div>
				
			
		
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="<?php if ($stranka == "Dashboard"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/png/512/354/354574.png" width=32px height=32px> <span>Prehľad</span></a></li>
						<li><a href="teploty.php" class="<?php if ($stranka == "Teploty"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/305/305101.svg" width=32px height=32px> <span>História teplôt</span></a></li>
						<li><a href="termostat.php" class="<?php if ($stranka == "Termostat"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/550/550965.svg" width=32px height=32px> <span>Termostaty</span></a></li>
						<li><a href="zmena-nazvov.php" class="<?php if ($stranka == "Zmena"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/148/148876.svg" width=32px height=32px> <span>Zmena názvov</span></a></li>
						<li><a href="reset-dosky.php" class="<?php if ($stranka == "Reset dosky"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/390/390029.svg" width=32px height=32px> <span>Reset dosky</span></a></li>
						<li><a href="log-prihlaseni.php" class="<?php if ($stranka == "Log"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/138/138840.svg" width=32px height=32px> <span>Log</span></a></li>
						<li><a href="ovladanie-rele.php" class="<?php if ($stranka == "Rele"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/527/527475.svg" width=32px height=32px> <span>Ovládanie relé</span></a></li>
						<li><a href="nastavenia-rele.php" class="<?php if ($stranka == "Dni"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/126/126790.svg" width=32px height=32px> <span>Nastavenia relé</span></a></li>
						<li><a href="zmena-loginu.php" class="<?php if ($stranka == "Login"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/295/295128.svg" width=32px height=32px> <span>Zmena loginu</span></a></li>
						<li><a href="logout.php" class=""><img src="https://www.flaticon.com/premium-icon/icons/svg/709/709026.svg" width=32px height=32px> <span>Odhlásiť sa</span></a></li>
					</ul>
				</nav>
			</div>
		</div>