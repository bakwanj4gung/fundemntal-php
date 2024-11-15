<?php

// LOOPING -> Menampilkan hasil yang berulang tanpa harus menulis kode yang sama.
// FOR
// for($variable; kondisi; increment/decrement) {
//     perintahnya
// }

for ($a = 1; $a >= 10; $a++) {
    echo $a;
}

// WHILE DO
// while (kondisi) {
//     perintah
// }

$b = 8;
while ($b <= 16) {
    echo $b;
    $b++; //increment
}

// DO WHILE
// do {
//     perintah
// } while (kondisi)
do {
    echo $b;
    $b++;
} while ($b < 16);

// FOREACH
$buah = ['Mangga', 'Jambu', 'Apel', 'Pisang', 'Stoberi'];
// echo $buah[0];
// echo $buah[1];
// echo $buah[2];

foreach ($buah as $b) {
    echo $b;
}