<?php 
include'functions.php';

if (isset($_POST['submitdata'])) {
	$id = "SELECT max(idproduk) as maxKode from produk";
	$huruf = "PDK";
	$kode = getId($id, $huruf);
	$idjenis = 
	$sql = "INSERT INTO produk (`idproduk`, `idjenis`, `namaproduk`) VALUES ('$kode', '$_POST[idjenis]', '$_POST[namaproduk]')";
	$sukses = "../data-produk.php?success";
	$gagal = "../data-produk.php?failed";
	tambahData($sql, $sukses, $gagal);
}

if (isset($_GET['del'])) {
	$sql = "DELETE FROM produk WHERE idproduk = '$_GET[id]'";
	$sukses = "../data-produk.php?success";
	$gagal = "../data-produk.php?failed";
	hapusData($sql, $sukses, $gagal);
}

if (isset($_POST['editdata'])) {
	$sql = "UPDATE produk SET idjenis = '$_POST[idjenis]', namaproduk = '$_POST[namaproduk]' WHERE idproduk = '$_POST[idproduk]'";
	$sukses = "../data-produk.php?success";
	$gagal = "../data-produk.php?failed";
	editData($sql, $sukses, $gagal);
}

?>