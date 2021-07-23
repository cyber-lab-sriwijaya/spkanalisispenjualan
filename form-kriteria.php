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
    
        
            
                <div class="card">
                    <div class="card-header card-header-primary">
                        <?php if (isset($_GET['edit'])) { ?>
                            <h4 class="card-title">Form Edit Kriteria</h4>Produk
                        <?php } else { ?>
                            <h4 class="card-title">Form Tambah Kriteria</h4>
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
                            $query = mysqli_query($conn, "SELECT * from kriteria where idkriteria = '$_GET[id]'");
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                                <form action="include/p_kriteria.php" method="POST">
                                    <div class="row">
                                	<div class="col-md-8">
                                		<div class="form-group">
                                			<input type="hidden" name="idkriteria" value="<?= $row['idkriteria'] ?>">
                                			<label class="bmd-label-floating">Nama Kriteria</label>
                                			<input type="text" name="namakriteria" class="form-control" value="<?= $row['namakriteria']; ?>" required>
                                		</div>
                                	</div>       
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Bobot</label>
                                            
                                            <input type="text" name="bobot" class="form-control" value="<?= $row['bobot']; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Sifat</label>
                                            <select name="sifat" class="form-control">
                                                <option value="benefit">Benefit
                                                </option>
                                                <option value="cost">Cost
                                                </option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tipe Input</label>
                                            <select name="tipeinput" class="form-control">
                                                <option value="input">Input
                                                </option>
                                                <option value="option">Option
                                                </option>
                                                
                                            </select>
                                        </div>
                                    </div>       
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Keterangan Kriteria</label>
                                            <input type="textarea" name="keterangan" class="form-control" value="<?= $row['keterangan'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" name="editdata" class="btn btn-success pull-right">EDIT</button>
                                <div class="clearfix"></div>
                                </form>
                            <?php }
                        } else { ?>
                            <form action="include/p_kriteria.php" method="POST">
                                
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Kriteria</label>
                                            <input type="text" name="namakriteria" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Bobot Kriteria</label>
                                            <input type="number" name="bobot" min="0" step="any" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Sifat</label>
                                            <select name="sifat" class="form-control">
                                                <option value="benefit">Benefit
                                                </option>
                                                <option value="cost">Cost
                                                </option>
                                                
                                            </select>
                                        </div>
                                    </div>       
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tipe Input</label>
                                            <select name="tipeinput" class="form-control">
                                                <option value="input">Input
                                                </option>
                                                <option value="option">Option
                                                </option>
                                                
                                            </select>
                                        </div>
                                    </div>       
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Keterangan Kriteria</label>
                                            <input type="textarea" name="keterangan" class="form-control" required>
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