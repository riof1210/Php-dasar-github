<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Input Biodata</h2>
    </center>
    <fieldset>
        <legend>
            <b>BIODATA</b>
        </legend>
        <form action="" method="post">
            <table width="1190">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>jenis kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jeniskel" value="Laki-laki" id="">Laki-laki
                        <input type="radio" name="jeniskel" value="Perempuan" id="">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl" id=""></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name="agama">
                            <optgroup label="Pilih Agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Budha</option>
                                <option>Hindu</option>
                            </optgroup>
                        </select></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type="checkbox" name="hobi[]" value="Membaca" id="">Membaca
                        <input type="checkbox" name="hobi[]" value="Bemain Bola" id="">Bermain Bola
                        <input type="checkbox" name="hobi[]" value="Main Game" id="">Main Game
                        <input type="checkbox" name="hobi[]" value="Renang" id="">Renang
                        <input type="checkbox" name="hobi[]" value="Bermain Badminton" id="">Bermain Badminton
                        <input type="checkbox" name="hobi[]" value="Menonton Film" id="">Menonton Film
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3"><input type="submit" name="kirim" value="Kirim">
                        <input type="reset" name="" value="Reset">
                    </td>
                </tr>
            </table>
            <p>
                <?php
                if (isset($_POST['kirim'])) {
                    echo "<fieldset>";
                    echo "<h2>BIODATA</h2>";
                    function biodata()
                    {
                        $nama = $_POST['nama'];
                        $jk = $_POST['jeniskel'];
                        $tgl = $_POST['tgl'];
                        $agama = $_POST['agama'];
                        $alamat = $_POST['alamat'];
                        $hobi = $_POST['hobi'];
                        echo "<table width='410'>";
                        echo "<tr><td>Nama</td>
                    <td> = </td>
                    <td>" . $nama . "</td></tr>";
                        echo "</tr><td>Jenis Kelamin</td>
                    <td> = </td>
                    <td>" . $jk . "</tr></td>";
                        echo "<tr><td>Tanggal Lahir</td>
                    <td> = </td>
                    <td>" . $tgl . "</td></tr>";
                        echo "<tr><td>Agama</td>
                    <td> = </td>
                    <td>" . $agama . "</td></tr>";
                        echo "<tr><td>Alamat</td>
                    <td> = </td>
                    <td>" . $alamat . "</td></tr>";
                        echo "<tr><td>Hobi</td>
                    <td> = </td>
                    <td>" . implode(", ", $hobi) . "</td></tr>";
                        echo "</table>";
                    }
                    biodata();
                    echo "</fieldset>";
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