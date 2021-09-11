<?php
function hitungumur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Saya bersia " . hitungumur(2004, 2021) . " tahun";
    echo "Sekarang berkenalan dengan anda";
}

perkenalan("Rio Fadli");
