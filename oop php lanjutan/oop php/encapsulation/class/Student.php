<?php

  readonly class Student{
    const SCHOOL_NAME = 'Sma Negeri 8'; // tidak dinamis
    // readonly  string $name;
    // readonly ?string $classroom ; //flex
   
    var  string $name;
    var ?string $classroom ;
    // var  string $name;

    // var ?string $classroom = 'Tidak ada informasi';

    
    function __construct(string $name ='',string $classroom =''){
      // echo 'object dibuat' . PHP_EOL;
        $this -> name = $name;
        $this -> classroom = $classroom;
    }

    // function __destruct(){
    //    echo "object {$this -> name} dihapus" . PHP_EOL;
    // } //menghapus object

    function information(): void{
      echo self::SCHOOL_NAME .PHP_EOL; //Self mengakses class
        echo "{$this -> name} belajar di kelas {$this -> classroom}"; //this mengakses object
    }
  }