<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Perhitungan Bangun Ruang Lingkaran</h2>
    <fieldset>
        <legend>
            <b>Menghitung Luas dan Keliling Lingkaran</b>
        </legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Masukan Nilai</td>
                    <td>:</td>
                    <td><input type="number" name="nilai" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3"><input type="submit" value="Hitung"></td>
                </tr>
            </table>
            <p>

                <?php
                function luas($nilai, $phi = 3.14)
                {
                    $hasil = $phi * $nilai * $nilai;
                    // if ($hasil <= 0) {
                    //     $hasil = "Hasil Tidak Boleh Kurang Dari Nol!!";
                    // }
                    return $hasil;
                }
                function keliling($nilai, $phi = 3.14)
                {
                    $hasil = 2 * $phi * $nilai;
                    // if ($hasil <= 0) {
                    //     $hasil = "Hasil Tidak Boleh Kurang Dari Nol!!";
                    // }
                    return $hasil;
                }

                if (isset($_POST['nilai'])) {
                    echo "<table>";
                    echo "<tr><td>Nilai Jari-jari</td>
                    <td> = </td>
                    <td>" . $_POST['nilai'] . "</td></tr>";
                    echo "</tr><td>Luas Lingkaran</td>
                    <td> = </td>
                    <td>" . luas($_POST['nilai']) . "</tr></td>";
                    echo "<tr><td>Keliling Lingkaran</td>
                    <td> = </td>
                    <td>" . keliling($_POST['nilai']) . "</td></tr>";
                    echo "</table>";
                }
                ?>
        </form>
    </fieldset>
</body>
<style>
    body {
        font-family: Jost, "Segoe UI", sans-serif;
    }
</style>

</html>