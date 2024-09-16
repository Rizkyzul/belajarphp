<?php
 require ('class/Student.php'); //jika ada error pemanggilan semua pesan dibawah tidak dijalankan
//  include ('class/Teacher.php'); //jika terjadi error pada teacher.php karena salah nulis pesan student tetap dijalankan
 require ('class/Teacher.php');

//student
  $budi = new Student('Budi','2b');
  // $budi -> name = 'budi';
  // $budi -> classroom = '2b';
  $budi->information();
  // unset($budi); menghapus budi atau

 

  echo PHP_EOL;
//lebih singkat menggunakan construct
  $andi = new Student('andi', '1b');
  // $andi -> name = 'andi';
  // $andi -> classroom = '1b';  
  $andi->information();

  // echo PHP_EOL;
  // var_dump($budi -> name);
  // var_dump($budi -> classroom);
  // var_dump($budi);
  echo PHP_EOL;
  // var_dump($andi);



  //guru

  $nina = new Teacher();
  $nina -> name = 'Nina';
  $nina -> classroom = '8a';
  $nina -> information();


  $anton = new MathTeacher();
  $anton -> name = 'anton';
  $anton -> classroom = '5a';
  $anton -> information();

  // var_dump($nina) . PHP_EOL;
  // $nina -> information();
  // var_dump($anton);
 
  // include('view.php');

  //constanta
  //  echo Student::SCHOOL_NAME .PHP_EOL;
  