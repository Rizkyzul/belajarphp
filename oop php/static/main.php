<?php
  require_once('class/MathHelper.php');
  require_once('class/Singelton.php');
  require_once('class/Person.php');


//static
//   echo MathHelper::$className . PHP_EOL;
// $helper = new MathHelper();
// echo $helper::$className . PHP_EOL;
// echo MathHelper::average(3,2,42,442,123). PHP_EOL;

//singelton
// $singelton = Singelton::getInstance();
// $singelton -> database = 'koneksi ke database';
//  var_dump($singelton);

//  $singelton = Singelton::getInstance();
//  var_dump($singelton);
$person1 = person::createPersonFromString('antolela', 'lopasi');
var_dump($person1);
print_r($person1);


$array = ['kiki', 'zulkar'];
$person2 = person::createPersonFromArray($array);
var_dump($person2);
print_r($person2);

 ?>