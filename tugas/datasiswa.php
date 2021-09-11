<html>

<head>
    <title> Registrasi Peserta Seminar </title>
    <link href="css_submit.css" rel="stylesheet" type="text/css">
</head>

<body style='margin : 20px; font : 16px arial;'>
    <center>
        <p> Registrasi Siswa Baru </p>
        <form method="POST" action="tugas18.php">
            <table border="1" cellspacing="1" cellpadding="10" style="border : #aaa; color: #101; font-family : arial; font-size : 12px;">
                <tr>
                    <td> Nama Siswa </td>
                    <td width="5" align="center"> : </td>
                    <td> <input type="text" placeholder="Masukan Nama Siswa..." name="nama" required /> </td>
                </tr>
                <tr>
                    <td> Jenis Kelamin </td>
                    <td align="center"> : </td>
                    <td> <input type="text" placeholder="Masukan Jenis Kelamin..." name="jeniskelamin" required /> </td>
                </tr>
                <tr>
                    <td> Kelas </td>
                    <td align="center"> : </td>
                    <td> <input type="text" placeholder="Masukan Kelas..." name="kelas" required /> </td>
                </tr>
                <tr>
                    <td> Alamat </td>
                    <td width="5" align="center"> : </td>
                    <td> <textarea name="alamat" placeholder="Masukan Alamat..." required></textarea> </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" name="submit" value="Submit" />
                        <input type="reset" name="Reset" value="Reset" />
                    </td>
                </tr>
            </table>
            <a href="tugas18.php"> Kembali </a>
        </form>
</body>

</html>