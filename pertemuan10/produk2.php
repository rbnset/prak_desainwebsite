<?php
//panggil file koneksi.php yang sudah anda buat
include "koneksi2.php";
?>

<html>

<head>
    <title>Menampilkan Data Dari Table Berbeda Dengan Tiga Join Table</title>
</head>

<body>
    <h1 align="center"> Daftar Produk</h1>

    <thead>
        <form>
            <table border="1" width="800" align="center">
                <tr>
                    <th>Nama Kategori</th>
                    <th>Nama Menu</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
                <?php if (mysqli_num_rows($query)) { ?>
                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $row["nama"] ?></td>
                            <td><?php echo $row["nama_menu"] ?></td>
                            <td><?php echo $row["qty"] ?></td>
                            <td><?php echo $row["hrg"] ?></td>
                            <td><?php echo $row["total"] ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </form>
</body>

</html>