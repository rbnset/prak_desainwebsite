<?php
$umur = 21;
$menikah = false;
if ($umur > 18) {
    if ($menikah) {
        echo "Selamat datang pak!";
    } else {
        echo "Selamat datang wahai pemuda!";
    }
} else {
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
}
