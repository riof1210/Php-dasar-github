<?php
$sumber = 'movie2.json';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

// echo "<h1 align='center'>Jumlah lomba anak bercerita terbaik jakarta ada " . count($data) . " Siswa dan Siswi</h1>";
// echo "<br/>";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan data json</title>
    <style>
        /* table {
            width: 100%;
        }

        table tr td {
            padding: 1rem;
        } */
    </style>
</head>

<body>
    <!-- <table border="1">
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Jenis Lomba</th>
            <th>Juara</th>
            <th>Nama</th>
            <th>Sekolah</th>
            <th>ID</th>
        </tr> -->
    <?php
    echo '<center> Data Film<br>';
    echo '<b>' . $data['Title'] . '</b><br>';
    echo $data['Poster'] . '<br>';
    echo $data['Plot'] . '</center><br>';
    echo '<table>';
    echo '<tr>
    <td>Tahun Rilis</td>'

    // for ($a = 0; $a < count($data); $a++) {
    //     print "<tr>";
    //     // penomeran otomatis
    //     print "<td>" . $a . "</td>";
    //     // menayangkan 
    //     print "<td>" . $data[$a]['tahun'] . "</td>";
    //     print "<td>" . $data[$a]['jenis'] . "</td>";
    //     print "<td>" . $data[$a]['juara'] . "</td>";
    //     print "<td>" . $data[$a]['nama'] . "</td>";
    //     print "<td>" . $data[$a]['sekolah'] . "</td>";
    //     print "<td>" . $data[$a]['id'] . "</td>";
    //     print "</tr>";
    // }
    ?>
    <!-- </table> -->
</body>

</html>