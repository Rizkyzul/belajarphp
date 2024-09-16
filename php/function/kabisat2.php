<?php
 function isLapyear2($year){
    if($year % 100 == 0){
         return false;
    }else if($year % 4 == 0){
         return true;
    }else if ($year % 400 == 0){
         return false;
    }else
         return false;
     }
    
 
    function isTestYear2(int $year)
    {
     $result = isLapyear2($year);
     if($result) {
      echo 'tahun ' . $year . ' adalah tahun kabisat' . PHP_EOL;
     }else{
     echo 'tahun ' . $year . ' bukan tahun kabisat' . PHP_EOL;
    }
}
 
isTestYear2(400);
isTestYear2(2240);
isTestYear2(2000);