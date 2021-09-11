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
        MENAMPILKAN DATA SISWA
        <br><br>

        <form action='datasiswa.php' method='POST'>
            <table>
                <tr>
                    <td> <input type='submit' name='tambah' value='Tambah siswa'> </td>
                </tr>
            </table>
        </form>

        <table border='1' Width='600'>
            <tr>
                <th> NO </th>
                <th> Nama </th>
                <th> Jenis Kelamin </th>
                <th> Kelas </th>
                <th> Alamat </th>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                $i = 1;
                echo "
            <tr>
                <td>
                    <center>" . $i . "</center>
                </td>
                <td><center>" . $nama = $_POST['nama'] . "</center></td>
                <td><center>" . $jeniskel = $_POST['jeniskelamin'] . "</center></td>
                <td><center>" . $kelas = $_POST['kelas'] . "</center></td>
                <td><center>" . $alamat = $_POST['alamat'] . "<center></td>
            </tr>
            ";
                $i++;
            }
            ?>
        </table>
</body>

</html>