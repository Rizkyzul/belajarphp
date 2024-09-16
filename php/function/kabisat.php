<?php

   function isLapyear(int $year): bool{
    return match (true) {
      $year % 400 == 0   => true ,
      $year % 100 == 0 => false,
       $year % 4 == 0  => true ,
       default => false
    };
   }


   function isLapyear2($year){
   if($year % 100 == 0)
        return false;
    else if($year % 4 == 0)
        return true;
    else if ($year % 400 == 0)
        return false;
    else
        return false;

    }
   

   function isTestYear($year)
   {
    $result = isLapyear2($year);
    if($result)
     echo 'tahun ' . $year . ' adalah tahun kabisat' . PHP_EOL;
    else
    echo 'tahun ' . $year . ' bukan tahun kabisat' . PHP_EOL;
   

   $result = isLapyear($year);
   if($result)
    echo 'tahun ' . $year . ' adalah tahun kabisat' . PHP_EOL;
   else
   echo 'tahun ' . $year . ' bukan tahun kabisat' . PHP_EOL;
  }





   isTestYear(6999);
   isTestYear(1200);


?>