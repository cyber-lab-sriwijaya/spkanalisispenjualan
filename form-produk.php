<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

include 'header.php';
include 'include/functions.php';
 ?>

 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <?php if (isset($_GET['edit'])) { ?>
                            <h4 class="card-title">Form Edit Produk</h4>Produk
                        <?php } else { ?>
                            <h4 class="card-title">Form Tambah Produk</h4>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['failed'])) { ?>
                            <div class="alert alert-danger col-4">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>
                                    <b> Data Gagal Diproses! </b></span>
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['edit'])) {
                            $query = mysqli_query($conn, "SELECT * from produk where idproduk = '$_GET[id]'");
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                                <form action="include/p_produk.php" method="POST">
                                    <div class="row">
                                	<div class="col-md-8">
                                		<div class="form-group">
                                			<input type="hidden" name="idproduk" value="<?= $row['idproduk'] ?>">
                                			<label class="bmd-label-floating">JANGAN LUPA ISI JENIS PRODUK</label>
                                			<select name="idjenis" class="form-control">
												 <?php 
                                			$jenis = query("SELECT * from jenisproduk");
                                			foreach ($jenis as $jns): ?>
                                				<option value="<?= $jns['idjenis']; ?>">
                                					<?= $jns['namajenis']; ?>
                                				</option>
                                			<?php endforeach ?> 	
                                			</select>
                                		</div>
                                	</div>       
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Produk</label>
                                            <input type="text" name="namaproduk" class="form-control" value="<?= $row['namaproduk']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" name="editdata" class="btn btn-success pull-right">EDIT</button>
                                <div class="clearfix"></div>
                                </form>
                            <?php }
                        } else { ?>
                            <form action="include/p_produk.php" method="POST">
                                
                                <div class="row">
                                	<div class="col-md-8">
                                		<div class="form-group">
                                			<label class="bmd-label-floating">Pilih Jenis Produk</label>
                                			<select name="idjenis" class="form-control">
												 <?php 
                                			$jenis = query("SELECT * from jenisproduk");
                                			foreach ($jenis as $jns): ?>
                                				<option value="<?= $jns['idjenis']; ?>">
                                					<?= $jns['namajenis']; ?>
                                				</option>
                                			<?php endforeach ?> 	
                                			</select>
                                		</div>
                                	</div>       
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Produk</label>
                                            <input type="text" name="namaproduk" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" name="submitdata" class="btn btn-success pull-right">Tambah</button>
                                <div class="clearfix"></div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>