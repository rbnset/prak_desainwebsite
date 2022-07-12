<?php

$SERVER = "localhost"; //local server localhost
$USER = "root"; //User server mysql 
$PASS = ""; //pasword server mysql
$DATABASE = "konveksi"; //Nama database yang dikoneksikan, sesuai dengan nama database anda

//koneksi ke server, jika gagal muncul notifikasi Error Conection Network 
$conect = mysqli_connect($SERVER, $USER, $PASS, $DATABASE) or die('Error Connection Network');

if ($conect) {
    echo "Koneksi Berhasil";
}
