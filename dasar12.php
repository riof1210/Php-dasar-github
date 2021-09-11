<?php

$url = "https://api.kawalcorona.com/";
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
                <th>Negara</th>
                <th>Positif</th>
                <th>Meninggal</th>
                <th>Sembuh</th>
            </tr>
            <?php
            $no = 1;
            $data = json_decode($dataCovid);
            foreach ($data as $covid) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $covid->attributes->Country_Region; ?></td>
                    <td><?php echo $covid->attributes->Confirmed; ?></td>
                    <td><?php echo $covid->attributes->Deaths; ?></td>
                    <td><?php echo $covid->attributes->Recovered; ?></td>
                </tr>
            <?php
            } ?>
        </table>
    </fieldset>
</body>

</html>
<style>
    a {
        font-family: Jost, "Segoe UI", sans-serif;
    }

    table {
        font-family: Jost, "Segoe UI", sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 40%;
        border: 1px solid #000000;
    }

    table tr th {
        background: #4B6587;
        color: #fff;
        font-weight: normal;
    }

    table,
    th,
    td {
        vertical-align: top;
        text-align: center;
        padding: 8px 107px;
    }

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
        padding: 14px 144.4px;
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

<!-- <style>
    body {
        background: #6E85B2;
    }

    p {
        font-family: Jost, "Segoe UI", sans-serif;
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
        font-family: Jost, "Segoe UI", sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 40%;
    }

    input[type=submit] {
        /* text-decoration: none;
        color: black;
        background-color: whitesmoke;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        border: 1px solid black;
        line-height: 50px;
        margin: auto;
        padding: 10px;
        border-radius: 5px; */

        width: 100%;
        padding: 10px 18px;
        margin: 7px 0;
        display: inline-block;
        box-sizing: border-box;
        color: black;
        background-color: #C8C6C6;
        border: 1px solid black;
        font-family: Jost, "Segoe UI", sans-serif;
    }

    .table2 td {
        text-align: center;
        padding-right: 20px;
        color: black;

    }

    .table2 input[type=text]:focus {
        border: 3px solid #555;
    }

    .table1 tr:hover {
        background-color: #93B5C6;
    }
</style> -->