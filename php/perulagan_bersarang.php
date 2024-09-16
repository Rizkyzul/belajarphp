<?php


//membuat perulangan bersarang


//DEFINE ADALAH FUNGSI UNTUK MENDEFINISIKAN VARIABEL
// EX : define('PI', 3.14);
  //MEMBUAT SEGITIGA DENGAN BAGIAN YANG BESAR BERADA DIBAWAH menuliskan nilai yang meningingkat secara horizontal

$value = 1;
for($i = 0; $i < 5; $i++) {
    for($j = 0; $j <= $i; $j++) { //i adalah baris j adalah kolom
        printf('%02d ', $value++);
}
 echo PHP_EOL;
}



?>