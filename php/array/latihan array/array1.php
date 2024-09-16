<?php
  $names = ['anggi', 'novan' , 'yusuf'];
  $names[] = 'pegi' ; //menambahkan elemen ke array
  array_pop($names);  //menghapus elemen terakhir
  array_push($names, 'dipa', 'cece'); //menambahkan elemen ke array lebih dari 1
  array_unshift($names, 'rizky'); // membuahahkan elemen ke awal atau pertama
  array_shif($names, 'anggi'); //menghapus elemen pertama    



var_dump($names);








 
//   foreach($names as $a){
//    echo $a . PHP_EOL;   
//  }

    //atau
//   foreach($names as $a):
//     echo $a . PHP_EOL;   
//   endforeach;


 ?>