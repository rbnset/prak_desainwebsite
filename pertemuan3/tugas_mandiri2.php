<?php

$Tugas = 70;
$Praktek = 80;
$UTS = 75;
$UAS = 60;

$Nilai = (0.20 * $Tugas) + (0.15 * $Praktek) + (0.30 * $UTS) + (0.35 * $UAS);

echo "Nilai Tugas : {$Tugas} <br>";
echo "Nilai Praktek : {$Praktek} <br>";
echo "Nilai UTS : {$UTS} <br>";
echo "Nilai UAS : {$UAS} <br>";
echo "Nilai Gabungan : {$Nilai} <br>";

if ($Nilai >= 85 and $Nilai <= 100) {
    echo "Predikat: A";
} elseif ($Nilai >= 66) {
    echo "Predikat: B";
} elseif ($Nilai >= 56) {
    echo "Predikat: C";
} elseif ($Nilai >= 46) {
    echo "Predikat: D";
} elseif ($Nilai >= 0) {
    echo "Predikat: E";
} else {
    echo "Nilai tidak valid!";
}
