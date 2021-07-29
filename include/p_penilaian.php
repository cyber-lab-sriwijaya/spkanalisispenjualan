<?php
session_start();
include 'functions.php';

if (isset($_POST['submitdata'])) {

	for ($i = 0; $i < count($_POST['nilai']); $i++) {
		$krt = $_POST['idkriteria'][$i];
		$nl = $_POST['nilai'][$i];

		$sql = "INSERT INTO `penilaian`(
			 	`idproduk`, 
			 	`idkriteria`, 
			 	`nilai`, 
			 	`periodebulan`, 
			 	`periodetahun`) 
			 	VALUES ('$_POST[idproduk]','$krt','$nl','$_POST[periodebulan]','$_POST[periodetahun]')";
		$exc = mysqli_query($conn, $sql);
	}
	if ($exc) {
		echo "<script>window.location='../penilaian.php?success'</script>";
	} else {
		echo "<script>window.location='../penilaian.php?failed'</script>";
	}
}
