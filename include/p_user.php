<?php 
include 'functions.php';
if (isset($_GET['del'])) {
	$sql = "DELETE FROM user WHERE username = '$_GET[id]'";
	$sukses = "../user.php?success";
	$gagal = "../user.php?failed";
	hapusData($sql, $sukses, $gagal);
}

if (isset($_POST['editdata'])) {
	//jika password tidak diganti
	if (isset($_POST['cek_pass'])) {
		$sql = "UPDATE user SET username = '$_POST[username]', nama = '$_POST[nama]',
			alamat = '$_POST[alamat]',
			nomorhp = '$_POST[nomorhp]',
			level = '$_POST[level]' WHERE username = '$_POST[usernamelama]'";
			

	}else{

		$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$sql = "UPDATE user SET username = '$_POST[username]', 
			password = '$pass',
			nama = '$_POST[nama]',
			alamat = '$_POST[alamat]',
			nomorhp = '$_POST[nomorhp]',
			level = '$_POST[level]'WHERE username = '$_POST[usernamelama]'";
	}
	$pesan = "User";
	$sukses = "../user.php?success";
	$gagal = "../user.php?failed";
	editData($sql, $sukses, $gagal);
}


 ?>