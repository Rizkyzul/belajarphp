<?php 
//array
//variable yang dapat memiliki banyak nilai
//nilai yang ada didalam elemen array boleh memiliki tipe data yang berbeda

//array adalah pasangan key dan value 
$angka = [1,2,3,4,5,6,7,8,9,10];
$bulan = ["januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember"];
$nama = ["agus","budi","sumanto"];
$angkaNamaBoolean = [true,false,1,2,3,"agus","budi","Sumanto"];

//menampilkan isi array
// var_dump($angka);
// echo "<br>";
// print_r($angkaNamaBoolean);
// echo "<br>";
// var_dump($nama)




// //menampilkan 1 elemen array
// echo $bulan[2];

//menambahkan elemen baru array
$bulan[2] = "judeber";
var_dump($bulan);

?>