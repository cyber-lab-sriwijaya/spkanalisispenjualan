<?php 
include'functions.php';

if (isset($_POST['submitdata'])) {
	$id = "SELECT max(idjenis) as maxKode from jenisproduk";
	$huruf = "JNS";
	$kode = getId($id, $huruf);
	$sql = "INSERT INTO jenisproduk (`idjenis`, `namajenis`) VALUES ('$kode', '$_POST[namajenis]')";
	$sukses = "../jenis-produk.php?success";
	$gagal = "../jenis-produk.php?failed";
	tambahData($sql, $sukses, $gagal);
}

if (isset($_GET['del'])) {
	$sql = "DELETE FROM jenisproduk WHERE idjenis = '$_GET[id]'";
	$sukses = "../jenis-produk.php?success";
	$gagal = "../jenis-produk.php?failed";
	hapusData($sql, $sukses, $gagal);
}

if (isset($_POST['editdata'])) {
	$sql = "UPDATE jenisproduk SET namajenis = '$_POST[namajenis]' WHERE idjenis = '$_POST[idjenis]'";
	$sukses = "../jenis-produk.php?success";
	$gagal = "../jenis-produk.php?failed";
	editData($sql, $sukses, $gagal);
}

?>
