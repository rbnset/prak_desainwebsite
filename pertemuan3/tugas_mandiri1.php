<?php

$total_belanja = 250000;

echo '<h3> Menghitung diskon dengan fungsi $diskon </h3>';
echo "Total belanja: Rp. {$total_belanja} <br>";

if ($total_belanja >= 200000) {
    $diskon = (0.3 * $total_belanja);
} elseif ($total_belanja >= 100000) {
    $diskon = (0.2 * $total_belanja);
} elseif ($total_belanja >= 50000) {
    $diskon = (0.1 * $total_belanja);
} elseif ($total_belanja <= 50000) {
    $diskon = (0 * $total_belanja);
} else {
    echo "Tidak tersedia";
}
$pembayaran = $total_belanja - $diskon;
echo "Mendapat diskon sebesar Rp. {$diskon}<br>";
echo "Total yang harus dibayar ialah Rp. {$pembayaran}<br>";
