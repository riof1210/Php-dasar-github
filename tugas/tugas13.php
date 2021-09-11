<?php

$suhu = 56;
$konversi = "r";
if ($konversi == "r") {
    $reamur = (4 / 5 * $suhu);
    echo "Hasil konversi suhu dari $suhu celsius ke reamur : $reamur reamur";
} elseif ($konversi == "f") {
    $fahrenhait = (9 / 5 * $suhu + 32);
    echo "Hasil konversi suhu $suhu celsius ke fahrenheit : $fahrenhait fahrenheit";
} elseif ($konversi == "k") {
    $kelvin = (273 + $suhu);
    echo "Hasil konversi suhu $suhu celsius ke kelvin : $kelvin kelvin";
} else {
    echo "Tidak dapat memproses!!";
}
