<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit();
}

include 'header.php';
include 'include/functions.php';
 ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card-header card-header-primary">
					<h4 class="card-title">
						Masukkan Bulan dan Tahun
					</h4>
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
                        <form action="" method="POST">
                        	<div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Periode Bulan</label>
                                            <select name="periodebulan" class="form-control">
                                                <option value="0">--Pilih Bulan--</option>
                                                <option value="januari">januari
                                                </option>
                                                <option value="februari">februari
                                                </option>
                                                <option value="maret">maret
                                                </option>
                                                <option value="april">april
                                                </option>
                                                <option value="mei">mei
                                                </option>
                                                <option value="juni">juni
                                                </option>
                                                <option value="juli">juli
                                                </option>
                                                <option value="agustus">agustus
                                                </option>
                                                <option value="september">september
                                                </option>
                                                <option value="oktober">oktober
                                                </option>
                                                <option value="november">november
                                                </option>
                                                <option value="desember">desember
                                                </option>        
                                                </select>
                                        </div>
                                    </div>       
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Periode Tahun</label>
                                            <select name="periodetahun" class="form-control">
                                            <option value="">-Pilih Tahun-</option>
                                                  <?php 
                                                    $y = date('Y');
                                                    for ($i=2019; $i <=$y+5 ; $i++) { 
                                                      echo "<option value='$i'>$i</option>";
                                                    }
                                                  ?>
                                            </select>                                        
                                        </div>
                                    </div>       
                                </div>
                                <button type="submit" name="filter" class="btn btn-success pull-right">Filter</button>
                                <div class="clearfix"></div> 
                        </form>
				</div>
			</div>
		</div>
	</div>
	
</div>


<?php 
if (isset($_GET['filter'])) {
    ?>
    <h1>Hello</h1>
<?php    
}

 ?>