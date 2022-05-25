<?php

$nilai = 90;
# membanding variabel
$lulus = $nilai > 80;

echo "{$nilai} > 80 = ";
var_dump($lulus);
echo "<br>";

# membandingkan langsung angka
echo "3 >= 3 = ";
var_dump(3 >= 3);
echo "<br>";

echo "3 < 6 = ";
var_dump(3 < 6);
echo "<br>";

echo "5 <= 3 = ";
var_dump(5 <= 3);
echo "<br>";


# anda juga bisa membandingkan antar 2 string
echo "'a' < 'b' = ";
var_dump('a' < 'b');
echo '<br>';

echo "'abc' < 'b' = ";
var_dump('abc' < 'b');
echo '<br>';
