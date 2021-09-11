<?php

$nilai = 1000;

if ($nilai == "") {
    echo "";
} elseif ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai : $nilai, Grade A";
} elseif ($nilai >= 80 && $nilai <= 90) {
    echo "Nilai : $nilai, Grade B";
} elseif ($nilai >= 75 && $nilai <= 80) {
    echo "Nilai : $nilai, Grade C";
} elseif ($nilai >= 60 && $nilai <= 75) {
    echo "Nilai : $nilai, Grade D";
} elseif ($nilai <= 60) {
    echo "Nilai : $nilai, Grade E";
} else {
    echo "tidak ada nilai";
}
