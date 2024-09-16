<?php
   require_once('class/Student.php');
   require_once('class/Teacher.php');


   function showTeacher(Teacher $teacher): void{
      if($teacher instanceof CodingTeacher){
        $teacher -> writeCode();
      }else {
        $teacher->information();
      }
   }

   // showTeacher(new Teacher('anton','2b'));
   // showTeacher(new MathTeacher('anton','2b'));
   showTeacher(new CodingTeacher('anton','2b'));
   

   // $object = new Teacher('anton','2b');
   // var_dump($object instanceof Teacher);
