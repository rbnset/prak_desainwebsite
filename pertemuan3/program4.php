<?php

$url = '/home';

switch ($url) {
    case '/':
        echo 'Selamat datang di dashboard.';
        break;
    case '/about':
        echo 'Selamat datang di halaman about.';
        break;
    case '/contact':
        echo 'Selamat datang di halaman kontak.';
        break;
    default:
        echo 'Maaf halaman yang anda cari tidak ditemukan.';
}

// echo ‘ < br > ’;
