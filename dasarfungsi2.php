<?php

function perkenalan($nama, $salam)
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Rio Fadli", "Hi");

echo "<hr>";

$saya = "Rio";
$ucapansalam = "Selamat pagi";
perkenalan($saya, $ucapansalam);
