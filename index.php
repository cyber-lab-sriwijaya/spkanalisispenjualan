<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

include'header.php';
include'include/functions.php';




 ?>
<section role="main" class="content-body content-body-modern">
					<header class="page-header">
						<h2 class="font-weight-bold text-6">Dashboard</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">
								<li><span>Home</span></li>
								<li><span>Sistem Pendukung Keputusan Hasil Penjualan</span></li>
							</ol>
					
							
						</div>
					</header>
				</section>			


				<!-- start: page -->
					<section class="body">
						<div class="container">
							<h1><marquee>Selamat Datang <?= strtoupper($_SESSION['nama']); ?> </marquee></h1>	
						</div>									
					</section>
				<!-- end: page -->



	

