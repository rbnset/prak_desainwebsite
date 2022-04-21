<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar variabel gettype()</title>
</head>
<body>
    <?php
        define ("PI", 3.14);
        $radius = 100;
        $luas_lingkaran = PI * ($radius * $radius);
        $keliling_lingkaran = 2 * PI * $radius;
        echo "Luas Lingkaran : ", $luas_lingkaran;
        echo "<br>";
        echo "Keliling lingkaran : ", $keliling_lingkaran
    ?>
</body>
</html>