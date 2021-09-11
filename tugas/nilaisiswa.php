<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body style='margin : 20px; font : 16px arial;'>
    <?php

    if (isset($_POST['tambah'])) {
        $nama  = $_POST['nama'];
        $nis = $_POST['nis'];
        $mapel = [
            $pai = $_POST['pai'],
            $ppkn = $_POST['ppkn'],
            $indonesia = $_POST['indonesia'],
            $mtk = $_POST['mtk'],
            $inggris = $_POST['inggris'],
            $pkk = $_POST['pkk'],
            $alquran = $_POST['alquran'],
            $bk = $_POST['bk'],
            $rpl = $_POST['rpl'],
            $tkj = $_POST['tkj']
        ];
        // $nilai = count($mapel);
        for ($i = 0; $i < count($mapel); [$i++]) {
            if ($mapel[$i] >= 85 && $mapel[$i] <= 100) {
                $grade[$i] = 'A';
                $bobot[$i] = 4;
            } elseif ($mapel[$i] >= 70 && $mapel[$i] <= 85) {
                $grade[$i] = 'B';
                $bobot[$i] = 3;
            } elseif ($mapel[$i] >= 60 && $mapel[$i] <= 70) {
                $grade[$i] = 'C';
                $bobot[$i] = 2;
            } elseif ($mapel[$i] >= 40 && $mapel[$i] <= 60) {
                $grade[$i] = 'D';
                $bobot[$i] = 1;
            } elseif ($mapel[$i] < 40) {
                $grade[$i] = 'E';
                $bobot[$i] = 0;
            }
            $ratarata = array_sum($bobot) / 10;
        }
        for ($i = 0; $i < count($grade);) {
            $grade0 = $grade[$i++];
            $grade1 = $grade[$i++];
            $grade2 = $grade[$i++];
            $grade3 = $grade[$i++];
            $grade4 = $grade[$i++];
            $grade5 = $grade[$i++];
            $grade6 = $grade[$i++];
            $grade7 = $grade[$i++];
            $grade8 = $grade[$i++];
            $grade9 = $grade[$i++];
        }
    ?>
        <center>
            <h3>
                <p>Nilai Siswa <br>
                    SMK Assalaam Bandung<br>
                    Tahun 2021/2022</p>
            </h3>
            <br>

            <table class="table2">
                <tr>
                    <td><b><?php echo $nama; ?></b></td>
                </tr>
                <tr>
                    <td><b><?php echo $nis; ?></b></td>

                </tr>
            </table>
            <table border='1' width='400' class="table1">
                <tr>
                    <th> NO </th>
                    <th> Mata Pelajaran</th>
                    <th> Nilai </th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pendidikan Agama Islam</td>
                    <td><?php echo $grade0; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PPKN</td>
                    <td><?php echo $grade1; ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bahasa Indonesia</td>
                    <td><?php echo $grade2; ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Matematika</td>
                    <td><?php echo $grade3; ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Bahasa inggris</td>
                    <td><?php echo $grade4; ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Produktif Kreatif dan Kewirausahaan</td>
                    <td><?php echo $grade5; ?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Al-Qur'an</td>
                    <td><?php echo $grade6; ?></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Bimbingan Konseling</td>
                    <td><?php echo $grade7; ?></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Produktif RPL</td>
                    <td><?php echo $grade8; ?></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Produtif TKJ</td>
                    <td><?php echo $grade9; ?></td>
                </tr>
            </table>
            <h3>Nilai rata-rata anda adalah : <?php echo $ratarata; ?></h3>
            <br>
            <a href="tugas21.php">Kembali</a>
        <?php
    } ?>
</body>
<style>
    body {
        background: #B8DFD8;
    }

    p {
        font-family: Jost, "Segoe UI", sans-serif;
    }

    b {
        font-family: Jost, "Segoe UI", sans-serif;
    }

    h3 {
        font-family: Jost, "Segoe UI", sans-serif;
    }

    .table1 {
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 30%;
        border: 1px solid #f2f5f7;
    }

    .table1 tr th {
        background: #38A3A5;
        color: #fff;
        font-weight: normal;
    }

    .table1,
    th,
    td {
        vertical-align: top;
        text-align: center;
        padding: 8px 20px;
    }

    /* .table1 tr:hover {
        background-color: #f5f5f5;
    } */
    .table1 tr {
        background-color: white;
    }

    .table1 tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table2 {
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 40%;
    }

    a:link,
    a:visited {
        background-color: white;
        color: black;
        border: 2px solid #22577A;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    a:hover,
    a:active {
        background-color: #22577A;
        color: white;
    }

    .table2 td {
        text-align: center;
        color: black;

    }

    .table2 input[type=text]:focus {
        border: 3px solid #555;
    }
</style>

</html>