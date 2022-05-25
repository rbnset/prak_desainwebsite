<?php

$nilai = 56;

echo "Nilai: {$nilai} <br>";

if ($nilai >= 85 and $nilai <= 100) {
    echo "Predikat: A";
} elseif ($nilai >= 75) {
    echo "Predikat: B";
} elseif ($nilai >= 60) {
    echo "Predikat: C";
} elseif ($nilai >= 50) {
    echo "Predikat: D";
} elseif ($nilai >= 0) {
    echo "Predikat: E";
} else {
    echo "Nilai tidak valid.";
}
