<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

include'header.php';
include'include/functions.php';



?>

<head>
	<!-- Basic -->
		<meta charset="UTF-8">

		<title>Editable Tables | Porto Admin - Responsive HTML5 Template</title>
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

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="vendor/select2/css/select2.css" />		<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />


		<!--(remove-empty-lines-end)-->



		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<!-- <script type="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->
		<script src="vendor/modernizr/modernizr.js"></script>		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
</head>

		<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />

<section role="main" class="content-body content-body-modern">
	<header class="page-header">
		<h2 class="font-weight-bold text-6">User</h2>
			<div class="right-wrapper">
				<ol class="breadcrumbs">
					<li><span>User</span></li>
					<li><span>Sistem Pendukung Keputusan Hasil Penjualan</span></li>
				</ol>		
			</div>
	</header>
</section>

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
					

<!-- start: page -->
<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>
						
								<h2 class="card-title">Data User</h2>
								<?php if (isset($_GET['success'])) { ?>
	                        	<div class="alert alert-success">
	                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                                <i class="card-action card-action-dismiss"></i>
	                            </button>
	                            <span>
	                                <b> Data Berhasil Diproses! </b></span>
	                        	</div>
                    <?php } else if (isset($_GET['failed'])) { ?>
		                        <div class="alert alert-danger col-4">
		                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                                <i class="material-icons">close</i>
		                            </button>
		                            <span>
		                                <b> Data Gagal Diproses! </b></span>
		                        </div>
                    <?php } ?>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
										<p class="card-category"><a href="registrasi.php" class="btn btn-warning"><i class="fas fa-plus"> Tambah Data</i></a></p>
											
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0" id="example">
									<thead>
										<tr>
											<th>No</th>
											<th>Username</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Nomor HP</th>
											<th>Level</th>
										<?php if (
											$_SESSION['level'] == 'Pimpinan'): ?>
											<th>Aksi</th>
										<?php endif ?>
											
										</tr>
									</thead>
									<tbody>
										<?php 
											$no = 1;
											$user = mysqli_query($conn, "SELECT * FROM user");
											while ($row = mysqli_fetch_assoc($user)) { ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $row['username']; ?></td>
													<td><?= $row['nama']; ?></td>
													<td><?= $row['alamat']; ?></td>
													<td><?= $row['nomorhp']; ?></td>
													<td><?= $row['level']; ?></td>
													<?php if ($_SESSION['level'] == 'Pimpinan'){ ?>
														<td>
														<a href="include/p_user.php?del&id=<?= $row['username']; ?>" class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin data ini akan dihapus?')" title="DELETE"><i class="fa fa-trash"></i></a>

														<a name="edit" id="edit" href="user.php?edit&id=<?= $row['username']; ?>" class="btn btn-success" title="EDIT"><i class="fa fa-edit"></i></a>
													</td>
													<?php } ?>
												</tr>
											
												
											<?php } ?>										
										
									
									</tbody>
								</table>
								<script>
									$(document).ready(function() {
    								$('#example').DataTable();
									} );
								</script>
							</div>
						</section>
<?php if (isset($_GET['edit'])): ?>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header card-header-primary">
					<h2 class="card-title">Edit Jenis Produk</h2>
				</div>

				<div class="card-body">
					<?php if (isset($_GET['failed'])) { ?>
						<div class="alert alert-danger col-4">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons"></i></button>
							<span>
								<b>Data Gagal Diproses</b>
							</span>
						</div>			
				</div>
					<?php } ?>

				<?php $query = mysqli_query($conn, "SELECT * from user WHERE username = '$_GET[id]'");

				while($row = mysqli_fetch_assoc($query)) { ?>
					<form action="include/p_user.php" class="form-horizontal form-bordered" method="POST">
						<div class="col-lg-12 form-group">
							<label class="col-lg-12" for="inputDefault">Username</label>
							<input type="text" name="username" class="form-control" id="inputDefault" value="<?= $row['username']; ?>" required>
						</div>
						<div class="col-lg-12 form-group">
							<input type="hidden" name="usernamelama" class="form-control" id="inputDefault" value="<?= $row['username']; ?>" required>
						</div>
						<div class="col-lg-12 form-group">
							<label class="col-lg-12" for="inputDefault">Nama</label>
							<input type="text" name="nama" class="form-control" id="inputDefault" value="<?= $row['nama']; ?>" required>
						</div>
						<div class="col-lg-12 form-group">
							<label class="col-lg-12" for="inputDefault">Alamat</label>
							<input type="text" name="alamat" class="form-control" id="inputDefault" value="<?= $row['alamat']; ?>" required>
						</div>
						<div class="col-lg-12 form-group">
							<label class="col-lg-12" for="inputDefault">Nomor HP</label>
							<input type="text" name="nomorhp" class="form-control" id="inputDefault" value="<?= $row['nomorhp']; ?>" required>
						</div>
						<div class="col-lg-12 form-group">
							<input type="hidden" name="level" class="form-control" id="inputDefault" value="Admin">
						</div>
						<div class="col-lg-12 form-group">
							<label class="col-lg-12" for="inputDefault">Password</label>
							<input type="password" name="password" class="form-control" id="inputDefault">
							<input type="checkbox" name="cek_pass"><strong style="color: red;">Cek list diisi jika tidak mengubah password</strong>
						</div>
						<div class="image">
						<button color="grey" type="submit" name="editdata" class="btn btn-success pull-right">Edit</button>
					</div>
					</form>
				<?php } ?>	

			</div>
		</div>
		
	</div>
<?php endif ?>
	

	
<!-- end: page -->
<div id="dialog" class="modal-block mfp-hide">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Are you sure?</h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<p>Are you sure that you want to delete this row?</p>
						</div>
					</div>
				</div>
				<footer class="card-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button id="dialogConfirm" class="btn btn-primary">Confirm</button>
							<button id="dialogCancel" class="btn btn-default">Cancel</button>
						</div>
					</div>
				</footer>
			</section>
		</div>

<?php include 'foot.php'; ?>


