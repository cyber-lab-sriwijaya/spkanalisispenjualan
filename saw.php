<?php
$conn = mysqli_connect('localhost', 'root', '', 'spkanalisispenjualan');
function alternatif()
{
    global $conn;
    $exc_alternatif = mysqli_query($conn, "SELECT * FROM produk");
    $alternatif = array();
    while ($row = mysqli_fetch_array($exc_alternatif)) {
        array_push($alternatif, array('idproduk' => $row['idproduk'], 'nama' => $row['namaproduk']));
    }
    return $alternatif;
}

function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function kriteria()
{
    global $conn;
    $exc_kriteria = mysqli_query($conn, "SELECT kriteria.*,MAX(penilaian.nilai) as nilai_max FROM kriteria,penilaian WHERE kriteria.idkriteria=penilaian.idkriteria GROUP BY idkriteria");
    $kriteria = array();
    while ($row = mysqli_fetch_array($exc_kriteria)) {
        array_push($kriteria, array('idkriteria' => $row['idkriteria'], 'namakriteria' => $row['namakriteria'], 'nilai_max' => $row['nilai_max'], 'bobot' => $row['bobot']));
    }
    return $kriteria;
}

function nilai()
{
    global $conn;
    $exc_nilai = mysqli_query($conn, "SELECT * FROM penilaian");
    $nilai = array();
    while ($row = mysqli_fetch_array($exc_nilai)) {
        array_push($nilai, array('idproduk' => $row['idproduk'], 'idkriteria' => $row['idkriteria'], 'nilai' => $row['nilai']));
    }
    return $nilai;
}

$alternatif = alternatif();
// dump($alternatif);
$kriteria = kriteria();
// dump($kriteria);
$nilai = nilai();

function data_array($alternatif, $kriteria, $nilai)
{
    for ($i = 0; $i < count($alternatif); $i++) {
        for ($j = 0; $j < count($kriteria); $j++) {
            foreach ($nilai as $n) {
                if ($n['idproduk'] == $alternatif[$i]['idproduk'] && $n['idkriteria'] == $kriteria[$j]['idkriteria']) {
                    $data_array[$i][$j] = $n['nilai'];
                }
            }
        }
    }
    return $data_array;
}
$data_array = data_array($alternatif, $kriteria, $nilai);
//dump($data_array);
function normalisasi($alternatif, $kriteria, $data_array)
{
    foreach ($alternatif as $i => $v) {
        foreach ($kriteria as $j => $k) {
            $normalisasi[$i][$j] = $data_array[$i][$j] / $k['nilai_max'];
        }
    }
    return $normalisasi;
}
// dump($kriteria);
$normalisasi = normalisasi($alternatif, $kriteria, $data_array);
//dump($normalisasi);
function preferensi($alternatif, $kriteria, $normalisasi)
{
    foreach ($alternatif as $i => $v) {
        foreach ($kriteria as $j => $k) {
            $preferensi[$i][$j] =  $normalisasi[$i][$j] * $k['bobot'];
        }
    }
    return $preferensi;
}
$preferensi = preferensi($alternatif, $kriteria, $normalisasi);
//dump($preferensi);
function sum_arr($alternatif, $kriteria, $preferensi)
{
    foreach ($alternatif as $i => $v) {
        foreach ($kriteria as $j => $k) {
            $sum_arr[$i] +=  $preferensi[$i][$j];
        }
    }
    return $sum_arr;
}

@$sum_arr = sum_arr($alternatif, $kriteria, $preferensi);
// dump($sum_arr);
