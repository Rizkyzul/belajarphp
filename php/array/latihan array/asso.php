<?php
//array associative
$cars = ['brand' => 'honda', 'type' => 'jazz', 'year' => 2020, 'dealer' => null];

// var_dump($cars);

//array keys mengembalikan nilay KEY pada array
$keys = array_keys($cars);
var_dump($keys);

//array value mengembalikan value pada array
$value = array_values($cars);
var_dump($cars);


//array key exits berfungsi memeriksa apakah array mengandung key
//bernilai boolean true jika ada false jika tdk ditemukan
var_dump(array_key_exists('type', $cars)); //true
var_dump(array_key_exists('dealer', $cars)); // true
var_dump(array_key_exists('kota', $cars)); // false

//bisa juga dengan isset namun tetap disarankan pakai key
//karena beresiko program kita menjadi error karena menvonis false pada nilai null
var_dump(isset($cars['dealer']));  //false walau ada nilai null
var_dump(isset($cars['brand'])); //true
var_dump(isset($cars['kota'])); //false









//extract membuat variabel key yang menyimpan nilai
extract($cars);
echo $type; //akan keluar (jazz sebagai value)