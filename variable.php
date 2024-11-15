<?php
// VARIABLE
// DECALRATION -> Membuat variable
// INITIALIZATION -> Pengisian variable
$car = "Fortuner"; //global scope

// SCOPE -> CAKUPAN[PENGGUNAAN VARIABLE]

// echo $car;

function merek() {
    global $car;
    $motor = 'Satria FU'; //local scope

    echo $car;
}

merek();

// DATA TYPES
// STRING
$string = '85821528727';
// INTEGER
$int = 123455657658; // BIlangan Bulat
// FLOAT
$float = 21.10; //Bilangan Desimal
// BOOLEAN
$bool = false;
// ARRAY
$array = ['Satria FU', 'Megapro', 7000, 10000, true, false];
// NULL
$tipeNull = null;
// Object
$namaObject = new Mio();

// Tempat menyimpan Properti dan Method
class Mio {

}