<?php
//Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "katering");
if (!$conn) {
    die("Conection Failed :" . mysqli_connect_error());
}

//Tampilkan Data
$query = mysqli_query($conn, "SELECT sales.*, menu_kategori.nama, menu.nama_menu 
        FROM sales, menu_kategori, menu 
        WHERE sales.id_katagori = menu_kategori.id 
        AND sales.id_menu = menu.id  
        ORDER BY id DESC");
