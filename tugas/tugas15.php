<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Bintang</title>
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
                        <a style="color:blue" class="nav-link" aria-current="page" href="tugas14.php">Project 1</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:blue" class="nav-link active" href="tugas15.php">Project 2</a>
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
    <form action="" method="post">Masukan Bintang
        <input type="text" name="isi" id="">
        <input type="submit" value="Submit" name="kirim">
    </form>
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

    form {
        margin-top: 10px;
        margin-left: 10px;
    }

    h2 {
        margin-left: 10px;
    }
</style>

</html>

<?php
if (isset($_POST['kirim'])) {
    $bilangan = $_POST['isi'];
    for ($i = 1; $i <= $bilangan; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "Program ganjil/genap :<br>";
    if (($i % 2) == 1) {
        for ($i = 1; $i <= $bilangan; $i++) {
            if (($i % 2) == 0) {
                echo $i . "<br>";
            } else {
            }
        }
    } else {
        for ($i = 1; $i <= $bilangan; $i++) {
            if (($i % 2) == 1) {
                echo $i . "<br>";
            } else {
            }
        }
    }
}
?>