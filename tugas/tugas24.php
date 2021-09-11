<?php
// Data 1
$data = '[
    {  
        "nisn":"029039828",
        "nama":"Andi",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"8493847589",
        "nama":"Gita",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"4893849238",
        "nama":"Anggi",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"4839482034",
        "nama":"Farell",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"5834829409",
        "nama":"Surya",
        "umur":"17",
        "email":"example@gmail.com"
    }
]';
$data2 = '[
    {  
        "nisn":"029039828",
        "nama":"Arul",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"8493847589",
        "nama":"Gina",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"4893849238",
        "nama":"Ayu",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"4839482034",
        "nama":"Jovi",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"5834829409",
        "nama":"Jack",
        "umur":"17",
        "email":"example@gmail.com"
    }
]';

$data3 = '[
    {  
        "nisn":"029039828",
        "nama":"Budi",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"8493847589",
        "nama":"Bagas",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"4893849238",
        "nama":"Akbar",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"4839482034",
        "nama":"Hasan",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"5834829409",
        "nama":"Ripa",
        "umur":"17",
        "email":"example@gmail.com"
    }
]';

$data4 = '[
    {  
        "nisn":"029039828",
        "nama":"Aldi",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"8493847589",
        "nama":"Agus",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"4893849238",
        "nama":"Amir",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"4839482034",
        "nama":"Alex",
        "umur":"17",
        "email":"example@gmail.com"
    },
    {  
        "nisn":"5834829409",
        "nama":"Ajax",
        "umur":"17",
        "email":"example@gmail.com"
    }
]';

$getdata = json_decode($data);
echo "<ul>";
echo "<li>Wali Dosen : Danny Indra Gunawan</li><p></ul>";
foreach ($getdata as $siswa) {
    echo 'Nim :' . $siswa->nisn . '<br>';
    echo 'Nama :' . $siswa->nama . '<br>';
    echo 'Umur :' . $siswa->umur . '<br>';
    echo 'Email :' . $siswa->email . '<p>';
}
echo "<hr>";
$getdata2 = json_decode($data2);
echo "<ul>";
echo "<li>Wali Dosen : Muhammad Sabar</li><p></ul>";
foreach ($getdata2 as $siswa2) {
    echo 'Nim :' . $siswa2->nisn . '<br>';
    echo 'Nama :' . $siswa2->nama . '<br>';
    echo 'Umur :' . $siswa2->umur . '<br>';
    echo 'Email :' . $siswa2->email . '<p>';
}
echo "<hr>";
$getdata3 = json_decode($data3);
echo "<ul>";
echo "<li>Wali Dosen : Tarsinah Sumarni</li><p></ul>";
foreach ($getdata3 as $siswa3) {
    echo 'Nim :' . $siswa3->nisn . '<br>';
    echo 'Nama :' . $siswa3->nama . '<br>';
    echo 'Umur :' . $siswa3->umur . '<br>';
    echo 'Email :' . $siswa3->email . '<p>';
}
echo "<hr>";
$getdata4 = json_decode($data4);
echo "<ul>";
echo "<li>Wali Dosen : Saepudin</li><p></ul>";
foreach ($getdata4 as $siswa4) {
    echo 'Nim :' . $siswa4->nisn . '<br>';
    echo 'Nama :' . $siswa4->nama . '<br>';
    echo 'Umur :' . $siswa4->umur . '<br>';
    echo 'Email :' . $siswa4->email . '<p>';
}
echo "<hr>";
