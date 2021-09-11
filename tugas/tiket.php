<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>KONSER AMAL SMK ASSALAAM BAHAGIA</title>
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
                        <a style="color:blue" class="nav-link active" aria-current="page" href="tugas14.php">Project 1</a>
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
    <table width="360">
        <h2>KONSER AMAL SMK ASSALAAM BAHAGIA</h2>
        <hr>
        <?php
        if (isset($_POST['Input'])) {
            $nama = $_POST['nama'];
            echo "<tr>
            <td>Nama Pemesan</td>
            <td></td>
            <td></td>
            <td>:</td>
            <td>$nama</td></tr>";
        }
        if (isset($_POST['jenis'])) {
            $jenis = $_POST['jenis'];
            if ($jenis == "studio1") {
                $tamu = "Opick";
            } else {
                $tamu = "Raihan";
            }
            echo "<tr>
            <td>Kode Studio</td>
            <td></td>
            <td></td>
            <td>:</td>
            <td>$jenis</td>
            </tr>
            <tr>
            <td>Bintang Tamu</td>
            <td></td>
            <td></td>
            <td>:</td>
            <td>$tamu</td>
            </tr>";
        }
        if (isset($_POST['kelas'])) {
            $kelas = $_POST['kelas'];
            if ($kelas == "VIP") {
                $harga = 50000;
            } else {
                $harga = 25000;
            }
            echo "
            <tr>
            <td>Jenis Kelas</td>
            <td></td>
            <td></td>
            <td>:</td>
            <td>$kelas</td>
            </tr>
            <tr>
            <td>Harga Tiket</td>
            <td></td>
            <td></td>
            <td>:</td>
            <td> Rp.$harga</td>
            </tr>";
        }
        if (isset($_POST['jumlah'])) {
            $jumlah = $_POST['jumlah'];
            $total = ($jumlah * $harga);
            echo "
            <tr>
            <td>Jumlah Tiket</td>
            <td></td>
            <td></td>
            <td>:</td>
            <td>$jumlah</td>
            </tr>
            <tr>
            <td>Total Biaya</td>
            <td></td>
            <td></td>
            <td>:</td>
            <td> Rp.$total</td>
            </tr>";
        }
        ?>
    </table>
    <br><br><a href="tugas14.php">INPUT KEMBALI</a><br>
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