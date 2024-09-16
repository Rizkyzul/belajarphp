<?php

// argument list
//argument list adalah sebuah array yang berisi semua argumen yang dikirimkan ke sebuah fungsi
function sum(...$numbers) {
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return $result;
}

// echo sum(1, 2, 3, 4, 5,2,3,2,1,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20) . PHP_EOL;
// //jika argument ingin jadi array
var_dump(sum(...[10,11,12,13,14]));
//... adalah spread operator
$array = [1,1,2,2,3,3];
var_dump(sum(...$array));