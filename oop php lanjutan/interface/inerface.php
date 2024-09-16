<?php

interface RunnableInterface{
    public function run(): void; //interface hanya bisa menggunakan method public
}

interface PetTypeInterface{
    public const PET_TYPE_MAMALS = 1;
    public const PET_TYPE_AMPHIBIANS = 2;
    public const PET_TYPE_REPTILES = 3;
    public const PET_TYPE_BIRDS = 4;
    public function getType(): int;
}

interface HasLegsInterface extends RunnableInterface, PetTypeInterface{
    public function getLegs(): int;
    
}


class Pet {
    public string $name;
}

//class mengembalikan runnable interface
class cat extends Pet implements HasLegsInterface, PetTypeInterface{
    public function run(): void{
        echo "Cat is running\n";
    }
    public function getType(): int{
        return self::PET_TYPE_MAMALS;
    }
    public function getLegs(): int{
        return 4;
    }
}
class dog extends Pet implements RunnableInterface, PetTypeInterface{
    public function run(): void{
        echo "dog is running\n";
    }
    public function getType(): int{
        return self::PET_TYPE_MAMALS;
    }
}

function callRun(RunnableInterface $runnalble): void{
    $runnalble -> run();
}

// $cat = new Cat(); 
// $cat->run();
// callRun(new cat()) ;
// callRun(new dog());
// // var_dump($dog);

$cat = new Cat();
$dog = new Dog();
callRun($cat);
callRun($dog);


//cara mengakses constant
var_dump($dog->getType());
var_dump(petTypeInterface::PET_TYPE_MAMALS);
var_dump($dog::PET_TYPE_MAMALS);
var_dump($cat->getLegs());