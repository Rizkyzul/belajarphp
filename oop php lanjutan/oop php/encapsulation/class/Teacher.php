<?php

  class Teacher{ //parent
  

   public  function __construct(private string $name,private string $classroom){
    }

    public function getName(): string{
      return $this->name;
    }
    public function setName(string $value): void{
      if(trim($value) != ''){
        $this -> name = $value;
      }
    }
    
    public function getClassroom(): string{
      return $this-> classroom;
    }
    public function setClassroom(string $value): void{
      $this -> setClassroom = $value;
    }
       

    public function information(): void{
        echo "{$this-> name} Mengajar di Kelas {$this->classroom}\n";
    }
  }

  
  class MathTeacher extends Teacher{ //childer
     private string $subject = 'math';
     public function information(): void{
      // parent::information(); //menampilkan method
      echo "{$this-> getName()} Mengajar di Kelas {$this->getClassroom()} dengan mata pelajaran: {$this-> subject}\n";
  }
      public function getSubject(): string{
      return $this->subject;
      }
  
  }
 
  class CodingTeacher extends Teacher{ //childer
    private string $coding = 'coding';
    public function writeCode(): void{
      echo "{$this-> getName()} Mengajar di Kelas {$this-> getClassroom()} dengan mata pelajaran: {$this-> getCoding()}\n";
  }
      public function getCoding(): string{
        return $this->Coding;
      }
 
 }


