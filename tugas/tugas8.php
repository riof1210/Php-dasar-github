<?php

$bilangan = -100;

if ($bilangan == 0) {
    echo "Silahkan Masukan bilangan";
} elseif ($bilangan % 2 == 0) {
    if ($bilangan > 0) {
        echo "$bilangan Adalah Bilangan Positif <br>";
    } else {
        echo "$bilangan Adalah Bilangan Negatif<br>";
    }
    echo "$bilangan Adalah Bilangan Genap <br>";
} else {
    if ($bilangan > 0) {
        echo "$bilangan Adalah Bilangan Positif <br>";
    } else {
        echo "$bilangan Adalah Bilangan Negatif<br>";
    }
    echo "$bilangan Adalah Bilangan Ganjil<br>";
}
