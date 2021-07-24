<?php 
session_start();
include 'functions.php';

if (isset($_POST['submitdata'])) {
    $bulan = $_POST['periodebulan'];
    $tahun = $_POST['periodetahun'];
    $id = "SELECT * FROM PENILAIAN WHERE periodebulan='$bulan' AND periodetahu='$tahun' ";
    echo "$id";
    exit;
    
}


 ?>



