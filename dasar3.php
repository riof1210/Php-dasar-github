<?php
/*$belanja = 10000;
if ($belanja >= 15000) {
    echo "Maka anda mendapatkan Silverqueen</br>";
} elseif ($belanja <= 10000 && $belanja >= 5000) {
    echo "Anda mendapatkan Teh Pucuk Harum 2 botol</br>";
} else {
    echo "Anda mendapatkan cireng</br>";
}*/

echo "Program lampu lalu lintas <br>";
$lampu = "jingga";
switch ($lampu) {
    case "merah":
        echo "<b>Anda harus berhenti!</b>";
        break;
    case "kuning":
        echo "<b>Anda harus siap-siap</b>";
        break;
    case "hijau":
        echo "<b>Anda harus maju</b>";
        break;
    default:
        echo "<b>Lampu lalu lintas error!</b>";
        break;
}
