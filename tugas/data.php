<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Pendataan Tamu Hotel</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="5a1e12ade5d4d.png" alt="" width="100">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tugas14.php">Project 1</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:blue" class="nav-link" href="tugas15.php">Project 2</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:blue" class="nav-link" href="tugas16.php">Project 3</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:blue" class="nav-link" href="tugas17.php">Project 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <fieldset>
        <legend>
            <h1>Pendataan Tamu Hotel</h1>
        </legend>
        <table width="355">

            <?php
            if (isset($_POST['pesan'])) {
                if (isset($_POST['pesan'])) {
                    $tgl = $_POST['tgl'];
                    echo "<tr>
                <td>Tanggal Menginap</td>
                <td>:</td>
                <td> $tgl</td>
                </tr>";
                }
                if (isset($_POST['nama'])) {
                    $nama = $_POST['nama'];
                    echo "<tr><td>Nama Tamu</td> 
                <td>:</td> 
                <td>$nama</td></tr>";
                }
                if (isset($_POST['nomor'])) {
                    $no = $_POST['nomor'];
                    echo "<tr><td>No Identitas</td> <td>:</td> <td>$no</td></tr>";
                }
                if (isset($_POST['tipe'])) {
                    $tipe = $_POST['tipe'];
                    echo "<tr>
                <td>Tipe Kamar</td> 
                <td>:</td> 
                <td>$tipe</td></tr>";
                    if ($tipe == "Superior") {
                        $harga = 850000;
                        echo "<tr>
                    <td>Harga</td> 
                    <td>:</td> 
                    <td>Rp.$harga</td></tr>";
                    } elseif ($tipe == "Deluxe") {
                        $harga = 950000;
                        echo "<tr>
                    <td>Harga</td> 
                    <td>:</td> 
                    <td>Rp.$harga</td></tr>";
                    } else {
                        $harga = 1400000;
                        echo "<tr>
                    <td>Harga</td> 
                    <td>:</td> 
                    <td>Rp.$harga</td></tr>";
                    }
                }
                if (isset($_POST['durasi'])) {
                    $durasi = $_POST['durasi'];
                    echo "<tr>
                <td>Durasi Menginap</td> 
                <td>:</td> 
                <td>$durasi Malam</td> </tr>";
                    $hasil = $harga * $durasi;
                    echo "<td>Total</td> 
                    <td>:</td>
                    <td> Rp.$hasil</td> </tr>";
                    if ($hasil > 2500000) {
                        $diskon2 =  (25 / 100) * $hasil;
                        $hasil3 = $hasil - $diskon2;
                        echo "<tr>
                    <td>Mendapatkan diskon sebesar 25% </td> 
                    <td>:</td>
                    <td>Rp.$hasil3</td></tr>";
                    } elseif ($hasil > 1700000) {
                        $diskon = (15 / 100) * $hasil;
                        $hasil2 = $hasil - $diskon;
                        echo "<tr>
                    <td>Mendapatkan diskon  sebesar 15% </td>
                    <td>:</td>
                    <td>Rp.$hasil2</td></tr>";
                    } else {
                        echo "Tidak Mendapatkan Diskon";
                    }
                }
            }
            ?>
        </table>
        <h2><a href="tugas16.php">Input Kembali</a></h2>
    </fieldset>
</body>
<style>
    body {
        background-color: #94cae7;
    }

    nav div {
        background: #bea7e2;
    }

    div ul {
        margin-left: 60px;
    }

    div ul li {
        margin-left: 40px;
    }

    table {
        margin-left: 10px;
    }

    h2 {
        margin-left: 10px;
    }
</style>

</html>
<!-- if ($tipe == "Superior") {
                        $hasil = $durasi * $harga;
                        echo "<tr>
                    <td>Total</td> 
                    <td>:</td>
                    <td>Rp.$hasil</td> </tr>";
                        if ($hasil > 1700000) {
                            $diskon = $hasil * (15 / 100);
                            $hasil2 = $hasil - $diskon;
                            echo "<tr>
                        <td>Mendapatkan diskon sebesar 15% </td>
                        <td>:</td>
                        <td>Rp.$hasil2</td></tr>";
                        } else {
                            $diskon2 = $hasil * (25 / 100);
                            $hasil3 = $hasil - $diskon;
                            echo "<tr>
                        <td>Mendapatkan diskon sebesar 25% </td> 
                        <td>:</td>
                        <td>Rp.$hasil3</td></tr>";
                        }
                    } elseif ($tipe == "Deluxe") {
                        $hasil = $durasi * $harga;
                        echo "<tr>
                    <td>Total</td> 
                    <td>:</td>
                    <td> Rp.$hasil</td> </tr>";
                        if ($hasil >= 1700000) {
                            $diskon = $hasil * (15 / 100);
                            $hasil2 = $hasil - $diskon;
                            echo "<tr>
                        <td>Mendapatkan diskon sebesar 15% </td>
                        <td>:</td>
                        <td>Rp.$hasil2</td></tr>";
                        } else {
                            $diskon2 = $hasil * (25 / 100);
                            $hasil3 = $hasil - $diskon;
                            echo "<tr>
                        <td>Mendapatkan diskon sebesar 25% </td> 
                        <td>:</td>
                        <td>Rp.$hasil3</td></tr>";
                        }
                    } else {
                        $hasil = $durasi * $harga;
                        echo "<tr>
                    <td>Total</td> 
                    <td>:</td>
                    <td> $hasil</td> </tr>";
                        if ($hasil >= 1700000) {
                            $diskon = $hasil * (15 / 100);
                            $hasil2 = $hasil - $diskon;
                            echo "<tr>
                        <td>Mendapatkan diskon sebesar 15% </td> 
                        <td>:</td>
                        <td>Rp.$hasil2</td></tr>";
                        } else {
                            $diskon2 = $hasil * (25 / 100);
                            $hasil3 = $hasil - $diskon;
                            echo "<tr>
                        <td>Mendapatkan diskon sebesar 25% </td> 
                        <td>:</td>
                        <td>Rp.$hasil3</td></tr>";
                        }
                    } -->