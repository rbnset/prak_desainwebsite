<?php

/**
 * Increment
 */
$a = 1;
echo "a = {$a} <br>";
$a++;
echo "a = {$a} <br>";
$a++;
echo "a = {$a} <br>";

# isi dari variabel $a dimasukkan lebih dulu ke variabel $b
# lalu variabel $a menambah dirinya sendiri dengan angka 1
$b = $a++;
echo "b = {$b} <br>";
echo "a = {$a} <br>";

/**
 * Decrement
 */
$a--;
echo "a = {$a} <br>";
$a--;
echo "a = {$a} <br>";

# isi dari variabel $a dimasukkan lebih dulu ke variabel $b
# lalu variabel $a mengurangi dirinya sendiri dengan angka 1
$b = $a--;
echo "b = {$b} <br>";
echo "a = {$a} <br>";
