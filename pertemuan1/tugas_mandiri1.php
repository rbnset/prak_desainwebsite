<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <container>
        <h1>Hitung Volume Balok</h1>
        <img src="./balok.png" alt="">
        <form action="tugas_mandiri1.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="text" name="panjang" required></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><input type="text" name="lebar" required></td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>:</td>
                    <td><input type="text" name="tinggi" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="Tentukan"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $tinggi = $_POST['tinggi'];

            $Volume_Balok = $panjang * $lebar * $tinggi;

            echo "Panjang : $panjang <br>";
            echo "Lebar : $lebar <br>";
            echo "Tinggi : $tinggi <br>";
            echo "Valume Balok : $Volume_Balok <br>";
        }
        ?>
    </container>
</body>

</html>