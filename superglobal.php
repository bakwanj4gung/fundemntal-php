<?php

// SUPERGLOBAL -> BUILT-IN VARIABLE -> VARIABLE BUATAN PHP
// bisa dipakai di mana pun, tidak terbatas dengan scope

// $_GET, $_POST, $_SESSION, $_COOKIE, $GLOBALS

// $_GLOBALS
$x = 1000;
$santri = 'Fulan';

function penjumlahan() {

    echo $GLOBALS['x'];
    echo $GLOBALS['santri'];
}

// penjumlahan();

// $_GET -> ARRAY ASSOCIATIVE
// BUILT-IN VARIABLE
        // VARIABLE ARRAY YANG DITERIMA DARI HTTP GET
        // ARRAY ASSOCIATIVE
        $profile = [
            'name' => 'Fulan',
            'address' => 'Pamijahan',
            'class' => '10 RPL',
        ];

        // echo $profile[0];
        // echo $profile['name'];
        // echo $profile['address'];
        // echo $profile['class'];

        // LOOP -> FOREACH -> array
        // foreach($profile as $p) {
        //     echo $p;
        // }

        // $_GET = [];

var_dump($_GET);

// $_POST
// var_dump($_POST);







