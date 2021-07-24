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
                        <b> Data Gagal Diproses! </b>
                    </span>
            </div>
                        <?php } ?>


        <form action="laporan.php" method="POST">
                    <select name="periodebulan" class="form-control">
                        <option value="">-pilih bulan-</option>
                        <option value="januari">januari</option>
                        <option value="februari">februari</option>
                        <option value="maret">maret</option>
                        <option value="april">april</option>
                        <option value="mei">mei</option>
                        <option value="juni">juni</option>
                        <option value="juli">juli</option>
                        <option value="agustus">agustus</option>
                        <option value="september">september</option>
                        <option value="oktober">oktober</option>
                        <option value="november">november</option>
                        <option value="desember">desember</option>    
                    </select>
                    <br>

                    <select name="periodetahun" class="form-control">
                        <option value="">-Pilih tahun-</option>
                          <?php 
                            $y = date('Y');
                            for ($i=2019; $i <=$y+5 ; $i++) { 
                              echo "<option value='$i'>$i</option>";
                            }
                          ?>
                    </select>
                    <br>

                    

                    <br>
                    <button type="submit">Cari</button>
                    
                </form>
                <br>
                <?php
                    if ((isset($_POST['periodebulan']) && $_POST['periodebulan']!='') && (isset($_POST['periodetahun']) && $_POST['periodetahun']!='')) {
                      $bulan = $_POST['periodebulan'];
                      $tahun = $_POST['periodetahun'];
                    }else{
                      $bulan = date('m');
                      $tahun = date('Y');
                    }
                ?>
                <strong>Bulan :<?php echo$bulan;?>, Tahun: <?php echo $tahun;?></strong>      
	</div>

                
</div>

<?php 
$no = 1;

if ((isset($_POST['periodebulan'])) && (isset($_POST['periodetahun']))) {
    $bulan=$_POST['periodebulan'];
    $tahun=$_POST['periodetahun'];
    $sql = "SELECT * FROM PENILAIAN WHERE periodebulan=$bulan AND periodetahun=$tahun";
}else{
    $bulan = date('m');
    $tahun = date('y');
    $sql = "SELECT FROM PENILAIAN WHERE periodebulan=$bulan AND periodetahun=$tahun";
}
$result = mysqli_query($conn, $sql);


?>

<div class="content">
    <div class="card-body">
    <h4>Data Penjualan SPK bulan <?= $bulan ?> tahun <?= $tahun ?></h4>
    <table class="table table-bordered table-striped mb-0">
        <thead>
            <tr>
                <th>No</th>
                <th>idpenilaian</th>
                <th>idproduk</th>
                <th>idkriteria</th>
                <th>nilai</th>
                <th>periode bulan</th>
                <th>periode tahun</th>
            </tr>
        </thead>
        <?php 
        global $result;
        while($row = mysqli_fetch_assoc($result)){?>
            <tbody>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['idpenilaian']; ?></td>
                    <td><?= $row['idproduk']; ?></td>
                    <td><?= $row['idkriteria']; ?></td>
                    <td><?= $row['nilai']; ?></td>
                    <td><?= $row['periodebulan']; ?></td>
                    <td><?= $row['periodetahun']; ?></td>
                </tr>
            </tbody>
        <?php } ?>

        <?php if (mysqli_num_rows($result)) {?>
            <tr><td colspan='7' text-align='center'><a href='laporan.php'></a></td></tr></tr>
        <?php}else{?>
            <tr><td>0result</td></tr>
        <?php } ?>

       
        
    </table>
    <?php mysqli_close($conn); ?>
    </div>
</div>


