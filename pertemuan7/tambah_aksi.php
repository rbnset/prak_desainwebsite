<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$alamat = $_POST['Alamat'];

// menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
