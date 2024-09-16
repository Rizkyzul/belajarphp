
<?php
//array map
//array map adalah fungsi array yang dapat digunakan untuk memapikan array
//memapikan array menjadi array baru
//mengaplikasikan fungsi callback pada setiap elemen pada array
//fungsi ini mengembalikan array baru tanpa mengubah array lamanya

$numbers = range(1,5);
$result = array_map(fn($n) => $n ** 3, $numbers);
 //di filter callback berada di pertama
 $result = array_map(fn($n) => '<li>' .$n . '</li>', $numbers); //digunakan pada html
var_dump($numbers);
var_dump($result);