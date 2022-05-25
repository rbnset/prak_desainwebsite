<!-- STRUKTUR LOGIKA SWITCH -->

<?php
$a = 3;
switch ($a) {
    case 0:
        echo "Angka Nol";
        break;
    case 1:
        echo "Angka Satu";
        break;
    case 2:
        echo "Angka Dua";
        break;
    case 3:
        echo "Angka Tiga";
        break;
    case 4:
        echo "Angka Empat";
        break;
    case 5:
        echo "Angka Lima";
        break;
    default:
        echo "Angka diluar jangkauan";
        break;
}
?>