<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}



include 'header.php';
include 'include/functions.php';
 ?>
<section role="main" class="content-body content-body-modern">
    <header class="page-header">
        <h2 class="font-weight-bold text-6">Penilaian</h2>
            <div class="right-wrapper">
                <ol class="breadcrumbs">
                    <li><span>Penilaian</span></li>
                    <li><span>Sistem Pendukung Keputusan Hasil Penjualan</span></li>
                </ol>       
            </div>

    </header>
</section>


 <div class="content">
    <div class="container-fluid">
        
            
                <div class="card">
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
                    <div class="card-header card-header-primary">
                            <h4 class="card-title">Masukkan Data Penilaian</h4>
                        
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
                                                        
                            <form action="include/p_penilaian.php" method="POST">
                               <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Periode Bulan</label>
                                            <select id="periodebulan" name="periodebulan" class="form-control" >
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

                             

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Pilih Produk</label>
                                            <select id="idproduk" name="idproduk" class="form-control">
                                                <option value="">--Pilih--</option>
                                            <?php 
                                                $produk = query("SELECT * from produk");
                                                foreach ($produk as $pdk): ?>
                                                    <option value="<?= $pdk['idproduk']; ?>">
                                                        <?= $pdk['namaproduk']; ?>
                                                    </option>
                                            <?php endforeach ?>     
                                            </select>
                                        </div>
                                    </div>       
                                </div>

                                <br>
                                <table class="table table-bordered table-striped mb-0" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pernyataan</th>
                                            <th>Keterangan</th>
                                            <th>Jawaban</th>
                                            
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            $penilaian = mysqli_query($conn, "SELECT * FROM kriteria ");
                                            while ($row = mysqli_fetch_assoc($penilaian)) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $row['namakriteria']; ?></td>
                                                    <td><?= $row['keterangan']  ?></td>
                                                    <input type="hidden" name="idkriteria[]" class="form-control" value="<?= $row['idkriteria']; ?>" >
                                                    <?php if ($row['tipeinput']=='input'){ ?>
                                                        <td>
                                                            
                                                            <input type="number" name="nilai[]" class="form-control">
                                                        </td>
                                                    <?php }else{?>
                                                        <td>
                                                
                                                    
                                                    <select name="nilai[]" class="form-control" required>
                                                        <option value="">--Pilih--</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div></td>
                                                    <?php } ?>    
                                                        
                                                </tr>
                                                
                                        <?php  }?>  

                                         
                                                
                                        
                                        
                                    </tbody>
                                </table>

                               
                                <button type="submit" name="submitdata" class="btn btn-success pull-right">Tambah</button>
                                
                            </form>
                                                            
                                
                            


                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       