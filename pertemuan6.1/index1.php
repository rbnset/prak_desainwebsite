<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="judul">
        <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>------------------------------</h3>
    </div>
    <br />

    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil di input.";
        } else if ($pesan == "update") {
            echo "Data berhasil di update.";
        } else if ($pesan == "hapus") {
            echo "Data berhasil di hapus.";
        }
    }
    ?>
    <br />
    <a class="tombol" href="input.php">+ Tambah Data Baru</a>

    <h3>Data user</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "koneksi1.php";
        /*
		$query_mysql = mysqli_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
			*/
        $nomor = 1;
        $ambildata = mysqli_query($conect, "SELECT * FROM user order by id desc");
        while ($a = mysqli_fetch_array($ambildata)) {
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $a['nama']; ?></td>
                <td><?php echo $a['alamat']; ?></td>
                <td><?php echo $a['pekerjaan']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>