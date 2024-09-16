<?php
 //operasi bitwise and (&)
//   $a = 0b00100101;
//   $b = 0b00111110;
//   $c = $a & $b;

  printf("%08b\n",  $a);
  printf("%08b\n",  $b);
  printf("------------------- &\n");
  printf("%08b\n",  $c);
  echo $a . PHP_EOL;
  echo $b . PHP_EOL;
  echo "------------------- &" . PHP_EOL;
  echo $c . PHP_EOL;








//operasi bitwise or (|) 
//or akan mengembalikan nilai yang paling tinggi
  $a = 0b00100101;
  $b = 0b00111110;
  $c = $a | $b;

  printf("%08b\n",  $a);
  printf("%08b\n",  $b);
  printf("------------------- |\n");
  printf("%08b\n",  $c);
  echo $a . PHP_EOL;
  echo $b . PHP_EOL;
  echo "------------------- |" . PHP_EOL;
  echo $c . PHP_EOL;




// bitwise xor (^)
// xor akan mengembalikan nilai yang berbeda jika berbeda misal 1 + 0 = 1 , 1 + 1 = 0
$a = 0b00100101;
$b = 0b00111110;
$c = $a ^ $b;

printf("%08b\n",  $a);
printf("%08b\n",  $b);
printf("------------------- ^\n");
printf("%08b\n",  $c);
echo $a . PHP_EOL;
echo $b . PHP_EOL;
echo "------------------- ^" . PHP_EOL;
echo $c . PHP_EOL;

//operasi bitwise not (~)
//ini akan mengembalikan nilai yang sama namun bernilai negatif

$a = 0;
$c = ~$a ;

printf("%064b\n",  $a);
printf("%064b\n",  $c);
echo $a . PHP_EOL;
echo $c . PHP_EOL;


//operasi bitwise shift (<<) dan (>>)
    $a = 0b00100101;
    $c = $a << 2;
    
    printf("%064b\n",  $a);
    printf("%064b\n",  $c);
    echo $a . PHP_EOL;
    echo $c . PHP_EOL;
  

    //operasi bitwise shift (>>)
    $a = 0b00100101;
    $c = $a >> 2;
    
    printf("%064b\n",  $a);
    printf("%064b\n",  $c);
    echo $a . PHP_EOL;
    echo $c . PHP_EOL;





?>