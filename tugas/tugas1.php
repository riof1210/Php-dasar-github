<?php

$uang = 100000;
$jajan = 15000;
$sosis = 25000;
$sedekah = 0.10;
$nemu_uang = 27000;


echo "Uang Ucup = <b>Rp.$uang</b>";
echo "<hr>";
$hasil = $uang - $jajan;
echo "Jajan Minum <b>Rp.$jajan</b>" . "</br>";
echo "Sisa uang Ucup jajan minum = <b>Rp.$hasil</b>";
echo "<hr>";
$hasil2 = $hasil - $sosis;
echo "Jajan Sosis Bakar <b>Rp.$sosis</b>" . "</br>";
echo "Sisa uang Ucup jajan sosis bakar + minum = <b>Rp.$hasil2</b>";
echo "<hr>";
$hasil3 = $hasil2 * $sedekah;
$hasil4 = $hasil2 - $hasil3;
echo "Sedekah ke musafir 10% dari <b>Rp.$hasil2</b> yaitu sebesar <b>Rp.$hasil3</b>" . "</br>";
echo "Sisa uang Ucup sekarang <b>Rp.$hasil4</b>";
echo "<hr>";
echo "Nemu uang dijalan sebesar 50% dari sisa uang ucup <b>Rp.$hasil4</b> yaitu sebesar <b>Rp.$nemu_uang</b>" . "</br>";
echo "Sisa uang Ucup sekarang <b>Rp.$nemu_uang</b> + <b>Rp.$hasil4</b>";
echo "<hr>";
$total = $hasil4 + $nemu_uang;
echo "Total uang ucup adalah <b>Rp.$total</b>";
