<?php

//latihan fibonaci
//recursive
// !1 !2 !3

  function fibonaci(int $n): int{
    if($n <= 1){
        return 0;
    } else if($n ==2){
        return 1;
    }
    return fibonaci($n - 1) + fibonaci($n - 2);
  }

  for($i = 1 ; $i <= 10; $i++){
    echo fibonaci($i) . ',';
  }
  echo PHP_EOL;