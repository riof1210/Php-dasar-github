<?php
echo "1. Contoh Program Array Numeric";
echo "<br>";

$jurusan = [
    'Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer', 'Manajemen Informatika'
];


// foreach ($jurusan as $indeks => $data) {
//     echo 'Jurusan ' . $data . ' - ada di index ' . $indeks;
//     echo '<br>';
// }
$jumlah_array = count($jurusan);
for ($i = 0; $i < $jumlah_array; $i++) {
    echo "Jurusan " . $jurusan[$i] . " - ada di index $i";
    echo "<br>";
}
echo "<br>";
echo "2. Contoh Program Array Assosiatif";
echo "<br>";

$jurusan = [
    'jurusan1' => 'Teknik Informatika',
    'jurusan2' => 'Sistem Informasi',
    'jurusan3' => 'Teknik Komputer',
    'jurusan4' => 'Manajemen Informatika'
];


foreach ($jurusan as $indeks => $data) {
    echo 'Kata Kunci Index = ' . $indeks . ', Nilai = ' . $data;
    echo '<br>';
}
