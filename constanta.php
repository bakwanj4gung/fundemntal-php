<?php

// CONSTANTA -> NILAI TETAP/KONSTAN
// Tidak bisa inisialisasi ulang
// Biasanya digunakan untuk melakukan konfigurasi
// Bersifat public
// define('NAMA_CONSTANTA', value);

$motor = 'N-Max';
echo $motor;

$motor = 'Satria FU'; //-> inisisalisasi ulang variable
echo '<br><br>'; //-> enter
echo $motor;

echo '<br><br>'; //-> enter
define('mobil', 'Brio'); // Biasanya digunakan untuk melakukan konfigurasi

echo mobil;