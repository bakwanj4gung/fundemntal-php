<?php
// FUNCTION
// BUILT-IN FUNCTION -> Fungsi yang udah dibikin PHP 
// $hello = 'Hello World!';

// echo $hello;
// print($hello);
// print_r($hello);
// var_dump($hello);
// mysqli();

// USER DEFINED -> Fungsi yang belum pernah dibikin PHP.
// function namaFunction (parameter) {
//     perintah
// }
function sayHello () {
    echo 'Hello World!';
}

// Function harus selalu dipanggil agar bekerja
// namaFungsi(argument); -> memanggil function

function penjumlahan($firstNumber = 0, $secondNumber = 0, $thirdNumber = 0) {
    return $firstNumber + $secondNumber - $thirdNumber;
}

var_dump(penjumlahan());