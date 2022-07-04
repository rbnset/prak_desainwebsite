<!DOCTYPE html>
<html>

<head>
    <title>== CRUD PHP dan MySQLi == </title>
</head>

<body>

    <h2>== CRUD DATA MAHASISWA == </h2>
    <br />
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['NIM']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>