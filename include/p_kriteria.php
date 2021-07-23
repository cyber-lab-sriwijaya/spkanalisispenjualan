<?php 
include'functions.php';

if (isset($_POST['submitdata'])) {
	$id = "SELECT max(idkriteria) as maxKode from kriteria";
	$huruf = "KTA";
	$kode = getId($id, $huruf);
	$idjenis = 
	$sql = "INSERT INTO kriteria (`idkriteria`, `namakriteria`, `bobot`, `sifat`, `tipeinput`, `keterangan`) VALUES ('$kode', '$_POST[namakriteria]', '$_POST[bobot]', '$_POST[sifat]', '$_POST[tipeinput]', '$_POST[keterangan]')";
	$sukses = "../kriteria.php?success";
	$gagal = "../kriteria.php?failed";
	tambahData($sql, $sukses, $gagal);
}

if (isset($_GET['del'])) {
	$sql = "DELETE FROM kriteria WHERE idkriteria = '$_GET[id]'";
	$sukses = "../kriteria.php?success";
	$gagal = "../kriteria.php?failed";
	hapusData($sql, $sukses, $gagal);
}

if (isset($_POST['editdata'])) {
	$sql = "UPDATE kriteria SET idkriteria = '$_POST[idkriteria]', namakriteria = '$_POST[namakriteria]', bobot = '$_POST[bobot]', sifat = '$_POST[sifat]', tipeinput = '$_POST[tipeinput]', keterangan = '$_POST[keterangan]' WHERE idkriteria = '$_POST[idkriteria]'";
	$sukses = "../kriteria.php?success";
	$gagal = "../kriteria.php?failed";
	editData($sql, $sukses, $gagal);
}

?>