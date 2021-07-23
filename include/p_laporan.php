<?php 
include 'functions.php';

$alternatif = query("SELECT penilaian.idproduk, produk.namaproduk FROM produk, penilaian WHERE penilaian.idproduk=produk.idproduk");

$kriteria =  query("SELECT penilaian.idkriteria, kriteria.namakriteria, penilaian.nilai, kriteria.bobot FROM kriteria, penilaian WHERE kriteria.idkriteria = penilaian.idkriteria");

$nilai = query("SELECT idproduk, idkriteria, nilai FROM penilaian");

function data_array($alternatif, $kriteria, $nilai)
{
    for ($i = 0; $i < count($alternatif); $i++) {
        for ($j = 0; $j < count($kriteria); $j++) {
            foreach ($sele as $n) {
                if ($n['idproduk'] == $alternatif[$i]['idproduk'] && $n['idkriteria'] == $kriteria[$j]['idkriteria']) {
                    $data_array[$i][$j] = $n['nilai'];
                }
            }
        }
    }
    return $data_array;
    var_dump($data_array);
    exit;
}


 ?>