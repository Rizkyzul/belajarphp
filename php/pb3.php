<?php

//membuat segitiga yang bagian besarnya berada dibawah namun nilai yang kita tulis meningkat secara vertikal
for($i = 0; $i < 5; $i++) {
    $value   = $i + 1;
      printf('%02d ', $i + 1);

    for($j = 0; $j < $i; $j++) { 
        $value += 5 - $j - 1;                  //i adalah baris j adalah kolom
        printf('%02d ', $value);
}
 echo PHP_EOL;
}



?>