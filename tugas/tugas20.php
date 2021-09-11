<?php
echo "1. Output array dengan menggunakan perintah PRINT_R()";
echo "<br>";
$negara = ['Indonesia', 'Malaysia', 'Singapura', 'Brunei Darussalam', 'Filipina'];
echo "<pre>";
print_r($negara);
echo "<br>";

echo "2. Output array assosiatif";
echo "<br>";
$ibukota = [
    'Indonesia' => 'Jakarta',
    'Malaysia' => 'Kuala Lumpur',
    'Singapura' => 'Singapura',
    'Thailand' => 'Bangkok',
    'Filipina' => 'Manila'
];


foreach ($ibukota as $indeks => $data) {
    echo "<ul>";
    echo '<li>Ibukota ' . $indeks . ' adalah ' . $data.'</li>';
    echo "</ul>";
    echo '<br>';
}