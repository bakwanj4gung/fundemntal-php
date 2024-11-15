<?php
// Control Flow -> Teknik untuk mengatur jalannya kode.
// IF ELSE
// if (condition = boolean) {
//     kode yang diekesekusi ketika kondisi = true
// } else {
//     kode yang dieksekusi ketika kondisi = false
// }

function nilai ($number){
    if ($number == 10) {
        echo "A";
    } else {
        echo "B";
    }
}

nilai(9);

// ELSE IF -> PERCABANGAN YANG LEBIH DARI 2

// if (kondisi) {
//     perintah jika kondisi true
// } else if (kondisi2)  {
//     perintah jika kondisi2 true
// } else if (kondis3) {
//     printah jika kondisi3 true
// } else {
//     Perintah ketika semua kondisi false
// }
$n = 75;
if ($n >= 90) { //90 - infinity
    echo "A";
} else if ($n >= 80) { //80 - 89
    echo "B";
} else if ($n >= 70) { //70 - 79
    echo "C";
} else {
    echo "Remidi";
}

// SWITCH -> PERCABANGAN YANG LEBIH DARI 2
// switch(ekspresi) {
//     case 'nilai1' :
//         perintah
//         break;

//     case 'nilai2' :
//         perintah
//         break;
//     default:
//         perintah
//         break;
// }

switch ($n) {
    case $n >= 90 :
        echo 'A';
        break;
    case $n >= 80 :
        echo 'B';
        break;
    default:
        echo 'Remidi';
}
