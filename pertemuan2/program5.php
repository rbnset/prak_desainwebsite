<?php

$a = true && true; # true
$b = true and false; # false
$c = false && false; # false
$d = true || false; # false

# ekspresi berikut akan diselesaikan dari kiri ke kanan
$e = true && false && false;

# ekspresi yang berada di dalam kurung diselesaikan terlebih dahulu
$f = "a" === "a" && ((3 > 5) or 3 + 5 >= 7);

# negasi
$g = !true;
$h = !(true && !false);

# var_dump semua variabel di atas untuk melihat hasilnya
var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";
var_dump($f); echo "<br>";
var_dump($g); echo "<br>";
var_dump($h); echo "<br>";
