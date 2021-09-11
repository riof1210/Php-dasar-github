<?php

$biaya = 1000000;
$bulan = "mei";

if ($bulan == "mei") {
    $mei = $biaya * 0.30;
    $hasil = $biaya - $mei;
    echo "Biaya $biaya akan melakukan daftar ppdb bulan Mei dengan diskon sebesar 30% menjadi $hasil";
} elseif ($bulan == "juni") {
    $juni = $biaya * 0.20;
    $hasil2 = $biaya - $juni;
    echo "Biaya $biaya akan melakukan daftar ppdb bulan Juni dengan diskon sebesar 20% menjadi $hasil2";
} elseif ($bulan == "juli") {
    $juli = $biaya * 0.10;
    $hasil3 = $biaya - $juli;
    echo "Biaya $biaya akan melakukan daftar ppdb bulan Juli dengan diskon sebesar 10% menjadi $hasil3";
} else {
    echo "tidak dapat menghitung biaya daftar";
}
