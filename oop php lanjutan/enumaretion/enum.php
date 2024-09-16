<?php

enum  Gender: int {
    case Male = 1;
    case Female = 2;


    function sayHello(): string{
        if($this == Gender::Male){
            return "Hai Mr\n";
        }else if($this == Gender::Female){
            return "Hai Ms\n";
        }
    }
    static function fromString(string $s): Gender{
        return match ($s) {
             'Mr'=> Gender::Male,   
             'Ms'=> Gender::Female,
             default => Gender::Male,
        };
    }
}

// function sayHello(Gender $gender){
//     var_dump($gender ); //  var_dump($gender -> value); value dari enum ke backed
//     if ($gender == Gender::Male) {
//         echo "Hai Mr\n";
//     } else if ($gender == Gender::Female) {
//         echo "Hai Ms\n";
//     }
// }


// sayHello(Gender::from(1)); //dari backed ke enum (1)  untuk male (2) untuk famele
// sayHello(Gender::Female);
// var_dump(Gender::cases());

echo Gender::Male->sayHello();
echo Gender::Female->sayHello();

var_dump(Gender::fromString('Mr'));
var_dump(Gender::fromString('Ms'));
// var_dump(Gender::fromString('Mss')); // default