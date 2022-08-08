<?php
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";
?>
<!doctype html public>
<html>

<head>
    <title>JUDUL WEBSITE ANDA</title>
</head>

<body>
    <h1 align="center"> Daftar Admin</h1>
    <table border="1" width="600px" align="center">
        <thead>
            <tr>
                <th>Nama Admin</th>
                <th>Alamat Admin</th>
                <th>Pekerjaan</th>
            </tr>
        </thead>

        <tbody>
            <?php

            //ambil data dari tb_admin di database
            $ambildata = mysqli_query($conect, "SELECT * FROM user order by id desc");
            while ($a = mysqli_fetch_array($ambildata)) {
            ?>
                <tr>
                    <td><?php echo $a['nama']; ?></td>
                    <td><?php echo $a['alamat']; ?></td>
                    <td><?php echo $a['pekerjaan']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>