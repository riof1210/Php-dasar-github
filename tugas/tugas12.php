<?php

$waktu = 178000;
$konversi = "hari";


if ($konversi == "hari") {
    $hari = $waktu / 86400 % 24;
    echo "Hasil konversi dari $waktu detik ke hari adalah $hari hari";
} elseif ($konversi == "jam") {
    $jam = ($waktu / 3600 % 60);
    echo "Hasil konversi dari $waktu detik ke jam adalah $jam jam";
} elseif ($konversi == "menit") {
    $menit = ($waktu / 60) % 60;
    echo "Hasil konversi dari $waktu detik ke menit adalah $menit menit";
} elseif ($konversi == "detik") {
    $detik = $waktu;
    echo "Hasil konversi dari $waktu detik ke detik adalah $detik detik";
} else {
    echo "tidak dapat menghasilkan konversi";
}

// echo "$hari:$jam:$menit:$detik";
