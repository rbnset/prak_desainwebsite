<!-- Switch untuk tipe data string -->

<?php
$a = "dua";
switch ($a) {
    case "nol":
        echo "Angka 0 ";
        break;
    case "satu":
        echo "Angka 1 ";
        break;
    case "dua":
        echo "Angka 2 ";
        break;
    case "tiga":
        echo "Angka 3 ";
        break;
    default:
        echo "Angka diluar jangkauan";
        break;
}
?>