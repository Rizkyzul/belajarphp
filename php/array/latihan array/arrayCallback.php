<?php
  //array_filter
  //array filter adalah fungsi array yang dapat digunakan untuk memfilter array
  //berfungsi menyaringkan array berdasarkan fungsi callback
  //melakukan iterasi terhdap setiap elemen pada array, dan memgirimkannya sebagai argument pada fungsi callback
  //fungsi tidk merubah index, sehingga array yang dikembalikan berupa array dengan nomer index yang berloncat. index bisa disusun ulang menggunakan fungsi array_values()


  //buatlah function isOdd seperti ini jika menggunakan function lebih dari sekali
function isOdd(int $n):bool{
    return $n % 2 === 1;
}
  $numbers = range(11,20);
  $result = array_filter($numbers, 'isOdd');
  var_dump($numbers);
  var_dump($result);
  var_dump(array_values($result));

  //jika menggunakan sekali pakai (anonymous function)

  $numbers = range(11,20);
  $result = array_filter($numbers, fn($n) => $n % 2 === 1);
  var_dump($numbers);
  var_dump($result);
  var_dump(array_values($result));





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


//array reduce
//array reduce adalah fungsi array yang dapat digunakan untuk menggabungkan array
//fungsi ini mengembalikan nilai
//mengaplikasikan fungsi callback pada setiap elemen pada array
//calbck harus memiliki 2 parameter, yang pertama adalah elemen array, yang kedua adalah indexnya
//contoh menggunakan reduce
// Gunakan array_reduce ketika Anda ingin melakukan operasi agregasi pada array selain penjumlahan, seperti menghitung rata-rata, mencari nilai maksimum, atau menggabungkan elemen array.
//Gunakan array_sum ketika Anda hanya ingin menghitung jumlah total dari elemen dalam array. array_sum umumnya lebih performan dan lebih mudah dibaca untuk operasi penjumlahan sederhana.

$numbers = range(1,5);
// $result = array_reduce($numbers, fn($carry, $item) => $carry += $item, 0);
$result = array_reduce($numbers, fn($carry, $item) => $carry .= $item . ',' . '');
//atau

// $result = array_sum($numbers); //hasilnya sama 
var_dump($numbers);
var_dump($result);

