<?php
// CLASS -> BLUERPINT DARI SEBUAH OBJEK

class Motor { // -> ibarat tempat besar menyimpan property dan method
    public $color; // -> varible -> property
    public $engine; 
    public $merek; 

    // function _construct($parameter) { 

    //  }

    function start() { // -> function -> method

    }
}

$motorSatria = new Motor(); // -> ketika class dipanggil akan berubah jadi object
var_dump('Hello');
var_dump($motorSatria);

// constructor -> method yang otomatis dijalankan ketika class berubah jadi object
// function _construct($parameter) { perintah }

// Inheritance -> keturunan->warisan -> properti/method yang diwariskan 
// Namespace -> memberi nama halaman

// Access Modifiers -> mengatur variabel atau method bisa diakses di mana aja?
// public, private, protected.