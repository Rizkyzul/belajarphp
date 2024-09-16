<?php

//function yang sudah ada dalam php
 

//string functions(legth/count)

//menghitung panjang sebuah string (strlen(string $string): int)
$string = 'hello world';
var_dump(strlen($string)); //#11
echo $string[0] . PHP_EOL; // #h

//menghitung jumlah kata pada string (str_word_count(string $string, int $format = 0): int)
$string = 'hello world';
var_dump(str_word_count($string)); //#2
var_dump(str_word_count($string, 1)); //#bentuk array

//menghitung jumlah substring (str_word_count(string $string, int $format = 0): int)
//berapa jumlah o pada string maka jawabannya adalah 2
$string = 'hello world';
var_dump(substr_count($string, 'o'));


//string function untuk menghilangkan whitespace

//menghilangankan whitespace pada sebuah string (trim(string $string, string $characters = " \t\n\r\0\x0B"): string)
$string = 'hello world';
var_dump(trim($string)); //#hello world

//menghilangkan whitespace pada awal dan akhir string (trim(string $string, string $characters = " \t\n\r\0\x0B"): string)
$string = ' hello world ';
var_dump(trim($string)); //#hello world


//menghilangkan white space pada awal string (ltrim(string $string, string $characters = " \t\n\r\0\x0B"): string)
$string = ' hello world ';
var_dump(ltrim($string)); //#hello world

//menghilangkan whitespace pada akhir string (rtrim(string $string, string $characters = " \t\n\r\0\x0B"): string)
$string = ' hello world ';
var_dump(rtrim($string)); //# hello world






//function huruf bessar dan kecil

//mengubah string menjadi huruf krci (strtolower(string $string): string)
$string = 'HELLO WORLD';
var_dump(strtolower($string)); //#hello world

//mengubah string menjadi huruf besar (strtoupper(string $string): string)
$string = 'hello world';
var_dump(strtoupper($string)); //#HELLO WORLD

//mengubah huruf pertama menjadi kapital (ucfirst(string $string): string)
$string = 'hello world';
var_dump(ucfirst($string)); //#Hello world

//mengubah huruf pertama mejadi kecil (lcfirst(string $string): string)
$string = 'HELLO WORLD';
var_dump(lcfirst($string)); //#hello world

//mengubah semua huruf menjadi kapital (ucwords(string $string): string)
$string = 'hello world';
var_dump(ucwords($string)); //#Hello World





//string functions

//apakah string mengandung substring (strstr(string $haystack, string $needle, bool $before_needle = false): string)
$string = 'hello world';
var_dump(strstr($string, 'world')); //#true
var_dump(str_contains('hello world', 'Hello')); //#true


//apakah atring diawali oleh substring (str_starts_with(string $haystack, string $needle): bool)
$string = 'hello world';
var_dump(str_starts_with($string, 'hello')); //#true

//apakah string diakhiri oleh substring (str_ends_with(string $haystack, string $needle): bool)
$string = 'hello world';
var_dump(str_ends_with($string, 'hello')); //#false
var_dump(str_ends_with($string, 'world')); //#true  

/* substring */

$string = 'abcdefg';
echo substr($string, 0) . PHP_EOL; //#abcdefg
echo substr($string, 0, 3) . PHP_EOL; //#abc
echo substr($string, 3, 7) . PHP_EOL; //#defg
echo substr($string, -3) . PHP_EOL; //#efg
echo substr($string, -3,2) . PHP_EOL; //#ef
echo substr($string, -4, -1) . PHP_EOL; //def




//mencari posisi substring (strpos(string $haystack, string $needle, int $offset = 0): int)
$string = 'hello world';

//sensitive (strpos(string $haystack, string $needle, int $offset = 0): int)
var_dump(strpos($string, 'world')); //#6
var_dump(strpos($string, 'World')); //#false


//insensitive (stripos(string $haystack, string $needle, int $offset = 0): int)
var_dump(stripos($string, 'world'));  //#6
var_dump(stripos($string, 'World')); //#6

//striverse (strrev(string $string): string)
$string = 'hello world';
var_dump(strrev($string)); //#dlrow olleh

//str repeat (str_repeat(string $input, int $multiplier): string)
$string = 'hello ';
var_dump(str_repeat($string, 3)); //#hellohellohello

//str replace (str_replace(string $search, string $replace, string $subject, int $count = NULL): string)
$string = 'hello world';
var_dump(str_replace('world', 'world', $string)); //#hello world

//strIreplace (str_ireplace(string $search, string $replace, string $subject, int $count = NULL): string)
$string = 'hello world';
var_dump(str_ireplace('world', 'world', $string)); //#hello world


//string fungsi angka

// menulis angka menggunkan pemisah ribuan (number_format(float $number, int $decimals = 0, string $dec_point = ".", string $thousands_sep = ","): string)
$number = 12345678.12345;
var_dump(number_format($number, 2)); //#12,345,678.12
//untuk rupiah
var_dump(number_format($number, 2, ',', '.')); //#12.345.678,12

//mengisi string dengan string lainnya hingga mencapai panjang yang ditentukan (str_pad(string $input, int $pad_length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT): string)
$string = 'hello';
var_dump(str_pad($string, 100, ' ')); //#hello
echo str_pad('kiki',8) . str_pad(10000, 8, '_', STR_PAD_LEFT) . PHP_EOL; 
echo str_pad('kiki',8) . str_pad(10000, 8, '_', STR_PAD_RIGHT) . PHP_EOL; 
echo str_pad('ellena',8) . str_pad(3000, 8, '_', STR_PAD_RIGHT) . PHP_EOL; 

/*string functions string dan array */

//memisahkan string berdasarkan substring (explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array)
$string = 'hello world';
var_dump(explode(' ', $string)); //#hello world


//menggambungkan array menjadi string (implode(string $glue, array $pieces): string)
$array = ['hello', 'world'];
var_dump(implode(' ', $array)); //#hello world

//aliansi dari implode dan explode (str_split(string $string, int $length = 1): array)
$string = 'hello world';
var_dump(str_split($string)); //#['h','e','l','l','o',' ','w','o','r','l','d']


//string functions slashes

//menambahkan backlash pada tanda kutip (addcslashes(string $str, string $charlist = null): string)
$string = 'hello world';
var_dump(addcslashes($string, ' ')); //#hello\ world

//menghilangkan backlash pada tanda kutip (stripcslashes(string $str): string)
$string = 'hello\ world';
var_dump(stripcslashes($string)); //#hello world


/** string functions php web*/

//menambahkan tag BR setiap akhir baris (nl2br(string $string, int $flags = 0): string)
$string = 'hello world';
var_dump(nl2br($string)); //#hello world

//mengubah karakter menjadi HTML entities (htmlspecialchars(string $string, int $flags = ENT_COMPAT, string $encoding = "UTF-8", bool $double_encode = true): string)
$string = '<h1>Hello World</h1>';
var_dump(htmlspecialchars($string)); //#&lt;h1&gt;Hello World&lt;/h1&gt;    

//menghilngkan tag html dan php dari string (strip_tags(string $string, string $allowable_tags = null): string)
$string = '<h1>Hello World</h1>';
var_dump(strip_tags($string)); //#Hello World