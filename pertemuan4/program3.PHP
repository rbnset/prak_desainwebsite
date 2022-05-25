<!-- Menambahkan bagian default sebagai perintah yang akan dijalankan jika nilai dari variabel $a duluar dari angka 0-5.  -->


<?php
$a = 9;
switch ($a) {
    case 0:
        echo "Angka Nol ";
        break;
    case 1:
        echo "Angka Satu ";
        break;
    case 2:
        echo "Angka Dua ";
        break;
    case 3:
        echo "Angka Tiga ";
        break;
    default:
        echo "Angka diluar jangkauan";
        break;
}
?>