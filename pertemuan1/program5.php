<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar variabel gettype()</title>
</head>
<body>
    <?php
        $bool = true; // sebuah boolean
        $str = "foo"; // sebuah string
        $int = 12; // sebiah integer

        echo "Vatiabel \$bool bertipe : ";
        echo gettype($bool);
        echo "<br>";
        echo "Variabel \$str bertipe : ";
        echo gettype($str);
    ?>
</body>
</html>