<?php

//notasi big-o
//notasi big-o adalah notasi untuk menunjukkan tingkat pemecahan masalah
// 1. O(1)
// 2. O(log n)
// 3. O(n)
// 4. O(n log n)
// 5. O(n^2)
// 6. O(n^3)
// 7. O(2^n)
// 8. O(n!)

//CONTOH
// function isPrime($number): bool
// {
//     for ($i = 2; $i < $number; $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// function getPrimes($max){
//     for ($i =   1; $i <= $max ; $i++) {
//         if (isPrime($i)) {
//             echo $i .  '';
//         }
//     }
   
// }
// $start = microtime(true);
// getPrimes(50000);
// $end = microtime(true);
// $duration = round($end - $start, 3);
// echo ' waktu eksekusi ' . $duration . ' detik';


//contoh lainnya
//yang ini lambat

    function isPrime(int $n): bool {
        if($n < 2)
          return false;
        for($i = 2; $i < $n; $i++){
            if($i % $n == 0){
                return false;
            }
    }
    return false;
    }

    function getPrimes($max){
        for($n = 1; $n < $max; $n++){
            if(isPrime($n))
            echo $n . '';
        }
        echo PHP_EOL;
    }

$start = microtime(true);
getPrimes(50000);
$end = microtime(true);
$duration = round($end - $start, 3);
echo 'waktu eksekusi ' . $duration . ' detik';

