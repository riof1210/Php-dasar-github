<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body style='margin : 20px; font : 16px arial;'>
    <center>
        <h3>
            <p>Form Cetak Nilai Siswa <br>
                SMK Assalaam Bandung<br>
                Tahun 2021/2022</p>
        </h3>

        <form action='nilaisiswa.php' method='POST'>
            <div class="awal">
                <table class="table2">
                    <tr>
                        <td>Nama </td>
                        <td><input type="text" name="nama" id="nama" size="45"></td>

                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td><input type="text" name="nis" id="nis" size="45"></td>

                    </tr>
                </table>
            </div>
            <table border='1' class="table1">
                <tr>
                    <th> NO </th>
                    <th> Mata Pelajaran</th>
                    <th> Nilai </th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Pendidikan Agama Islam</td>
                    <td><input type="text" name="pai" id="" size='2'></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>PPKN</td>
                    <td><input type="text" name="ppkn" id="" size='2'></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Bahasa Indonesia</td>
                    <td><input type="text" name="indonesia" id="" size='2'></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Matematika</td>
                    <td><input type="text" name="mtk" id="" size='2'></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Bahasa inggris</td>
                    <td><input type="text" name="inggris" id="" size='2'></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Produktif Kreatif dan Kewirausahaan</td>
                    <td><input type="text" name="pkk" id="" size='2'></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Al-Qur'an</td>
                    <td><input type="text" name="alquran" id="" size='2'></td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Bimbingan Konseling</td>
                    <td><input type="text" name="bk" id="" size='2'></td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Produktif RPL</td>
                    <td><input type="text" name="rpl" id="" size='2'></td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Produtif TKJ</td>
                    <td><input type="text" name="tkj" id="" size='2'></td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td><input type='submit' name='tambah' value='Cetak Angka'></td>
                </tr>
            </table>
        </form>
</body>
<style>
    body {
        background: #6E85B2;
    }

    p {
        font-family: Jost, "Segoe UI", sans-serif;
    }

    .table1 {
        font-family: Jost, "Segoe UI", sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 40%;
        border: 1px solid #f2f5f7;
    }

    .table1 tr th {
        background: #4B6587;
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
</style>

</html>