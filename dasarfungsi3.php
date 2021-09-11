<?php

function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
}

perkenalan("Muhardian", "Hi");

echo "<hr>";

$saya = "Rio Fadli";
$ucapansalam = "Selamat Pagi";

perkenalan($saya);
