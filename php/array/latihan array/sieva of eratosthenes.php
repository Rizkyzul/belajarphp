<?php

//adalah algoritma yang paling cepat untuk mencari bilangan prime
// misal cari prima dari 1-50. kita anggap semuanya adalah bilangan prime


function getPrimes($n){
    $isPrimes = array_fill(0, $n + 1, true);
    $isPrimes[0] = false;
    $isPrimes[1] = false;

    for($i = 2; $i <= $n; $i++){
        if($isPrimes[$i]){
            echo $i . ' ';
            for($j = $i  * $i; $j <= $n; $j += $i)
            $isPrimes[$j] = false;
        }
    }
   echo PHP_EOL;
    // var_dump($isPrimes);
}
 $start = microtime(true);
getPrimes(1000000);
$end = microtime(true);
$duration = round($end - $start, 3);
echo ' waktu eksekusi ' . $duration . ' detik';