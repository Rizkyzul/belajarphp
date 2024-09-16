<?php

 require_once('class/Teacher.php');


 $teacher = new MathTeacher('anton','2b');
 $teacher->setName('       '); 
 $teacher->setClassroom('2b');
 $teacher->information();

 $teacher = new CodingTeacher('anton','2b');
 $teacher->setName('       '); 
 $teacher->setClassroom('2b');
 $teacher->information();
