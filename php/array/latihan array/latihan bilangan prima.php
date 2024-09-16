<?php

//bilangn prima
//bilangan prima adalah bilangan yang habis dibagi oleh angka 1 dan angka itu sendiri
//contoh
//1,2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97

 function isPrime($number): bool
 {
     for ($i = 2; $i < $number; $i++) {
         if ($number % $i == 0) {
             return false;
         }
     }
     return true;
 }
//  echo isPrime(101) ? "true" : "false";
for($i = 0; $i < 100; $i++) {
    if(isPrime($i)) {
        echo $i .  ',';
    }
}