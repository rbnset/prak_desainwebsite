<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi - </title>
</head>

<body>

    <h2>CRUD DATA MAHASISWA </h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="NIM"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>