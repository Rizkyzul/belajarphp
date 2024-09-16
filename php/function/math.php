<?php

//math functions

/**
 * yang berhubungan dengan pembulatan
 * fungsi round() dan floor() dan ceil()
 */
//round digunakan untuk membulatkan angka ke angka yang ditentukan
echo round(2.5) . PHP_EOL;
echo round(2262.456,2) . PHP_EOL;

//floor digunakan untuk membulatkan ke bawah
echo floor(2.5) . PHP_EOL;
//ceil digunakan untuk membulatkan ke atas
echo ceil(2.5) . PHP_EOL;



 /**
  * yang berhubungan dengan nilai
  * fungsi max() dan min() dan abs()
  */

  /**
   * yang berhubungan dengan sistem bilangan
   *  decbin(), bindec(), decoct(), octdec(), dechex(), hexdec()
   */
   var_dump(decbin(10)); //decbin adalah fungsi integer ke string
   var_dump(bindec('1010')); //mengembalikan string
   var_dump(decoct(100)); // decoct adalah fungsi integer ke string
   var_dump(octdec('10')); //octdec adalah fungsi string ke integer
   var_dump(dechex(10)); //dechex adalah fungsi integer ke string
   var_dump(hexdec('10')); //hexadecimal adalah  fungsi string ke integer
   echo PHP_EOL;
   /** yang berhubungan dengan operasi matematika
    * pow(), sqrt(), round(), log(), log10(), sin(), cos(), tan(), exp(), pi(), min(), max()
    * 
    */
    var_dump(abs(-4.2));
    var_dump(abs(5));
    var_dump(abs(-5));
   

    var_dump(max(1,4,5,6,8));
    var_dump(min(1,4,5,6,8));   

    var_dump(sqrt(81));
    var_dump(pow(2,4));
echo PHP_EOL;
    //pow digunakan untuk pangkat
    var_dump(2 ** 4);
    var_dump(pow(2,4));