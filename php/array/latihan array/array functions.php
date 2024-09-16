<!-- <?php

//range() membuat array dan mengisinya dengan nilai yang berada diantara dua nilai

// $number = range(1, 20);
// var_dump($number);  

//akan membuat int 1-20
// bisa juga sebaliknnya 
//akan membuat int 20-1

//  $number = range(20, 1);
// var_dump($number);  

//bisa juga dengan alfabet namun hanya melihat dari alfabet awal saja misal (apel, jeruk) berarti akan mencetak a-j


//array_fill() membuat array dan mengisinya dengan nilai tertentu

// $array = array_fill(0, 5, 'aku ganteng');
// var_dump($array);

//makan akan mencetak "aku ganteng sebanyak 5 kali









//array_pad() menambahkan element baru ke array apabila jumlah datanya masih dibawah $length
//jika masih dibawa yang dimau dengan contoh ini adalah 5 maka akan mencetak sisa kurang dengan value yang kita mau
//namun jika sudah pas (argumen) atau kurang dari tidak akan ada penambahan value apapun
//namun hanya bisa satu value baru
$origin = ['a','b','c'];
var_dump(array_pad($origin, 5, 'value baru')); //value baru akan dibawa
var_dump(array_pad($origin, -5, 'value baru')); // ini diatas











//array reverse mengembalikan urutan nilai dalam array
// $origin = [1,2,3,4,5];
// var_dump(array_reverse($origin)); //disini 5 akan berada paling depan

//shuffle mengacak urutan dalam array
var_dump(shuffle($origin));
var_dump($origin); //akan mengembalikan array dengan acak

//sort mengurutkan nilai dalam array (ascending) (kecil ke besar)
$origin2 = ['3','6','7','10', '4','2300', '122'];
var_dump(sort($origin2));
var_dump($origin2);

//rsort mengurutkan nilai dalam array (descending) (besar ke kecil)
var_dump(rsort($origin2));
var_dump($origin2);




//array_unique() menghapus nilai ganda pada array
$unik =[1,2,3,4,4,5,4,4,5,4];
var_dump(array_unique($unik)); //akan menghapus angka yang sama hanya tersisa 1


//array_slice() mengembalikan sebagian isi array
$slice = ['a','b','c','d','e'];
var_dump(array_slice($slice, 3));//jadi kita memotong indeks dari 0-2 (3indeks)
var_dump(array_slice($slice, -3)); //memotong element dari element nomer 3 dari belakang
var_dump(array_slice($slice, 0,3)); //memotong dari array a-c
var_dump(array_slice($slice, 1, -1)); //memotong paling belakang





//array_splice() menghapus sebagian isi array dan mengubahnya menjadi nilai lain
var_dump(array_splice($slice, 2,2)); //mengambil dari nomer indek ke 2 sebanyak 2 element
var_dump($slice);


//menambah nilai lainnya
var_dump(array_splice($slice, 2,2, ['z','x','p','o']));  //menambah nilai baru
var_dump($slice); 