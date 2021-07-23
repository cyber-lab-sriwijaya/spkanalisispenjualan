<?php 


if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}



 ?>


<!DOCTYPE html>
<html class="fixed">
<head>
	<!-- Basic -->
		<meta charset="UTF-8">

		<title>SPK Analisis Penjualan</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">

		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />		<link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />		<link rel="stylesheet" href="vendor/morris/morris.css" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />


		<!--(remove-empty-lines-end)-->



		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
</head>
<body>
	<section class="body">
		<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="index.php" class="logo">						<img src="img/logo-radja-promosi.png" width="75" height="35" alt="Porto Admin" />					</a>					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					
			
					
			
					
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<!-- <img src="img/%21logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/%21logged-user.jpg" /> -->
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo $_SESSION['nama']; ?></span>
								<span class="role"><?php echo $_SESSION['level']; ?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="bx bx-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="index.php">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
				                    <li>
				                        <a class="nav-link" href="user.php">
				                            <i class="bx bx-book-alt" aria-hidden="true"></i>
				                            <span>User</span>
				                        </a>
				                    </li>
				                <?php if ($_SESSION['level']== 'Admin'): ?>
				                    <li>
				                        <a class="nav-link" href="jenis-produk.php">
				                            <i class="bx bx-cube" aria-hidden="true"></i>
				                            <span>Jenis Produk</span>
				                        </a>                        
				                    </li>

				                    <li>
				                        <a class="nav-link" href="data-produk.php">
				                            <i class="bx bx-cube" aria-hidden="true"></i>
				                            <span>Data Produk</span>
				                        </a>                        
				                    </li>

				                    <li>
				                        <a class="nav-link" href="kriteria.php">
				                            <i class="bx bx-cube" aria-hidden="true"></i>
				                            <span>Kriteria</span>
				                        </a>                        
				                    </li>

				                    <li>
				                        <a class="nav-link" href="penilaian.php">
				                            <i class="bx bx-cube" aria-hidden="true"></i>
				                            <span>Penilaian</span>
				                        </a>                        
				                    </li>
				                    	
				                    <?php endif ?>    
				                    
				                    

				                    <li>
				                        <a class="nav-link" href="laporan.php">
				                            <i class="bx bx-cube" aria-hidden="true"></i>
				                            <span>Laporan</span>
				                        </a>                        
				                    </li>

				                    
				            </nav>
				
				            
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					
						
					
						
					

				





<!-- setelah body -->

<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="master/style-switcher/style.switcher.js"></script>		<script src="vendor/popper/umd/popper.min.js"></script>		<script src="vendor/bootstrap/js/bootstrap.js"></script>		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="vendor/common/common.js"></script>		<script src="vendor/nanoscroller/nanoscroller.js"></script>		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="vendor/jquery-ui/jquery-ui.js"></script>		<script src="vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>		<script src="vendor/jquery-appear/jquery.appear.js"></script>		<script src="vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>		<script src="vendor/flot/jquery.flot.js"></script>		<script src="vendor/flot.tooltip/jquery.flot.tooltip.js"></script>		<script src="vendor/flot/jquery.flot.pie.js"></script>		<script src="vendor/flot/jquery.flot.categories.js"></script>		<script src="vendor/flot/jquery.flot.resize.js"></script>		<script src="vendor/jquery-sparkline/jquery.sparkline.js"></script>		<script src="vendor/raphael/raphael.js"></script>		<script src="vendor/morris/morris.js"></script>		<script src="vendor/gauge/gauge.js"></script>		<script src="vendor/snap.svg/snap.svg.js"></script>		<script src="vendor/liquid-meter/liquid.meter.js"></script>		<script src="vendor/jqvmap/jquery.vmap.js"></script>		<script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>		<script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>		<script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>		<script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>		<script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>		<script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>		<script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>		<script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>


		<!--(remove-empty-lines-end)-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
		<!-- Examples -->
		<script src="js/examples/examples.dashboard.js"></script>

	<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66667af9f9c8987b","version":"2021.5.2","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":10}'></script>

</body>
</html>