<?php
// For
echo "1. Pengulangan For <br>";
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    echo "Ini perulangan ke - $i <br>";
}
echo "<br>";


// While
echo "2. Pengulangan While <br>";
echo "<br>";
$ulangi = 0;
while ($ulangi < 10) {
    echo "ini perulangan ke - $ulangi <br>";
    $ulangi++;
}
echo "<br>";


// Do-While
echo "3. Pengulangan Do-While<br>";
echo "<br>";
$ulang = 10;
do {
    echo "ini perulangan ke - $ulang <br>";
    $ulang--;
} while ($ulang > 0);
echo "<br>";


// Foreach
echo "4. Pengulangan foreach<br>";
echo "<br>";
$book = [
    "Panduan belajar java untuk pemula",
    "Membangun aplikasi java dengan netbeans",
    "Tutorial java dan Mysql",
    "Membuat penggajian Dekstop dengan java"
];
echo "<h5>Judul buku java </h5>";
echo "<ol>";
foreach ($book as $buku) {
    echo "<li>$buku</li>";
}
echo "</ol>";
