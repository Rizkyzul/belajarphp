<?php
//membuat segitiga dengan bagian besar berada diatas menuliskan nilai yang meningingkat secara diagonal
for($i = 0; $i < 5; $i++) {
    for($j = 0; $j < 5 - $i; $j++) { //i adalah baris j adalah kolom
        printf('%d ', $i + $j + 1);
}
 echo PHP_EOL;
}



?>