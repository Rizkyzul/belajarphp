<?php
//destructuring functions
//apabila kita menyimpan data ke dalam array, maka kalo mau akses data trsb kita harus menyebutkan nama array ditambah indexnya
//cara ini bisa dipersingkat dengan destructuring menyimpan nilai array ke dalam variabel

//contoh
$numbers=[1,2,3];
[$first,$second,$third] = $numbers;


var_dump($numbers);

//jila ingin memanggil index pertama
//cara lama
var_dump($numbers[0]);
//cara baru
var_dump($first);



//destructuring array associative
$cars = [
    'brand' => 'honda',
    'type' => 'jazz',
    'year' => 2020,
    'dealer' => 'mahligai'
];
[
    'brand' => $brand,
    'type' => $type,
    'year' => $year,
    'dealer' => $dealer
] = $cars;

print_r($cars);
print_r(compact('brand', 'type', 'year', 'dealer')); // compact digunakan untuk memanggil semua variabel
print_r($brand);
print_r($type);
print_r($year);



//menggunakan foreach
$students = [
    [1,'kiki', '7b'],
    [2,'kiku', '9b'],
    [3,'koky', '8b']
];

foreach($students as [$id, $name, $class]){
    // echo $id . PHP_EOL;
    // echo $name . PHP_EOL;
    // echo $class . PHP_EOL;
    var_dump($students);
};