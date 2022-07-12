<?php
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";
?>

<html>

<head>
    <title>JUDUL WEBSITE ANDA</title>
</head>

<body>
    <h1 align="center"> Daftar Produk</h1>
    <table border="1" width="800" align="center">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Katagori Produk</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Berat</th>
                <th>Harga</th>
                <th>Diskon</th>
            </tr>
        </thead>

        <tbody>
            <?php
            //ambil data dari tb_produk dan tb_katagori  di database
            $ambildata = mysqli_query($conect, "SELECT * FROM tb_produk, tb_katagori where tb_produk.id_katagori=tb_katagori.id_katagori order by id_produk desc");
            while ($a = mysqli_fetch_array($ambildata)) {
            ?>
                <tr>
                    <td><?php echo $a['id_produk']; ?></td>
                    <td><?php echo $a['nama_produk']; ?></td>
                    <td><?php echo $a['nama_katagori']; ?></td>
                    <td><?php echo $a['deskripsi_produk']; ?></td>
                    <td><?php echo $a['stok_produk']; ?></td>
                    <td><?php echo $a['berat_produk']; ?>(gr)</td>
                    <td>Rp. <?php echo $a['harga_produk']; ?></td>
                    <td><?php echo $a['diskon_produk']; ?>%</td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
    <p align="center">Menampilkan data produk dan data katagori dari database, tabel produk ber relasi dengan tabel katagori dengan id_katagori yang terdapat pada tabel produk, <br>Maka data dapat di tampilakn bersamaan</p>
</body>

</html>