
<?php
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
