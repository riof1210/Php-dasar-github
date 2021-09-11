<?php

$pribadi = [
    'Nama' => 'Rio Fadli',
    'Umur' => '17 Tahun',
    'Alamat' => 'Kp. Cangkuang',
    'Hobi' => ['Bermain Game', 'Membaca Buku Komik', 'Renang'],
    'Media Sosial' => ['Instagram' => 'fadlirio1210', 'Facebook' => 'Fadli']
];

echo "<pre>";
print_r($pribadi);
echo "<br>";
echo "Pemanggilan Array 2 Dimensi <br>";
echo $pribadi['Hobi'][0] . "<br>";
echo $pribadi['Media Sosial']['Instagram'];
