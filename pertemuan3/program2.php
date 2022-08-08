<?php

$nilai = 85;

echo 'Memeriksa variable $nilai <br>';
echo "Nilai: {$nilai} <br>";

if ($nilai >= 85) {
    echo "Sangat mengesankan!";
} elseif ($nilai >= 70) {
    echo "Selamat anda lulus!";
} else {
    echo "Jangan menyerah, anda pasti bisa!";
}

echo "<br>";
