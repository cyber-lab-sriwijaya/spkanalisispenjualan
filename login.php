<?php 
session_start();
require 'include/functions.php';

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}


if (isset($_POST["login"])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );

	//cek username
	if ( mysqli_num_rows($result) === 1 ) {
		
		//cek password
		while($row = mysqli_fetch_assoc($result)){
			$_SESSION['username'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['alamat'] = $row['alamat'];
			$_SESSION['nomorhp'] = $row['nomorhp'];
			$_SESSION['level'] = $row['level'];
		
			if (password_verify($password, $row["password"])){
				//set session
				$_SESSION["login"] = true;

				header("Location: index.php");
				exit();
			}
		}
	}

	$error = true;

}

 ?>




<!doctype html>
<html class="fixed">
	
<!-- Mirrored from www.okler.net/previews/porto-admin/3.1.0/pages-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jun 2021 11:13:57 GMT -->
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

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
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="" class="logo float-left">
					<img src="img/logo-radja-promosi.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Sign In</h2>
					</div>
					<div class="card-body">

						<?php if (isset($error)) : ?>
							<p style="color: red; font-style: italic;">username/password salah!!!</p>	
						<?php endif; ?>

						<form action="" method="post">
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group">
									<input name="username" type="text" class="form-control form-control-lg" id="username" required />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="bx bx-user text-4"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
								</div>
								<div class="input-group">
									<input name="password" type="password" class="form-control form-control-lg" id="password" required />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="bx bx-lock text-4"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4 text-left">
									<button type="submit" class="btn btn-primary mt-2" name="login">Sign In</button>
								</div>
							</div>
							

							

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2017. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="master/style-switcher/style.switcher.js"></script>		<script src="vendor/popper/umd/popper.min.js"></script>		<script src="vendor/bootstrap/js/bootstrap.js"></script>		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="vendor/common/common.js"></script>		<script src="vendor/nanoscroller/nanoscroller.js"></script>		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->


		<!--(remove-empty-lines-end)-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
	<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66667b1ab81704ef","version":"2021.5.2","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":10}'></script>
</body>

<!-- Mirrored from www.okler.net/previews/porto-admin/3.1.0/pages-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jun 2021 11:13:57 GMT -->
</html>