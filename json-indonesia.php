<?php

$url = "https://api.kawalcorona.com/indonesia/";
// persiapkan curl / init curl
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$dataCovid = curl_exec($ch);
// tutup curl
curl_close($ch);
// menampilkan hasil curl
// echo $output;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website Data Positif</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <ul>
        <li class="dropdown"><a href="dasar12.php" class="dropbtn">Data Covid Dunia</a>
            <div class="dropdown-content">
                <a href="json-positif.php">Data Positif Dunia</a>
                <a href="json-negatif.php">Data Sembuh Dunia</a>
                <a href="json-meninggal.php">Data Meninggal Dunia</a>
            </div>
        </li>
        <li><a href="json-indonesia.php">Data Covid Indonesia</a></li>
        <li>
            <a href="json-provinsi.php">Data Covid Provinsi Indonesia</a>
        </li>
    </ul>
    <fieldset>
        <legend>Data Covid</legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Nama Negara</th>
                <th>Kasus Positif</th>
                <th>Kasus Sembuh</th>
                <th>Kasus Meninggal</th>
                <th>Dirawat</th>
            </tr>
            <?php
            $no = 1;
            $data = json_decode($dataCovid);
            foreach ($data as $covid) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $covid->name; ?></td>
                    <td><?php echo $covid->positif; ?></td>
                    <td><?php echo $covid->sembuh; ?></td>
                    <td><?php echo $covid->meninggal; ?></td>
                    <td><?php echo $covid->dirawat; ?></td>
                </tr>
            <?php
            } ?>
        </table>
    </fieldset>
</body>

</html>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a,
    .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 149.5px;
        text-decoration: none;
    }

    li a:hover,
    .dropdown:hover .dropbtn {
        background-color: red;
    }

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>