<?php

 class Person{

    private function __construct(public string $firstName, public string $lastName){
    }
    public static function createPersonFromString(string $firstName, string $lastName): Person{
        return new Person($firstName, $lastName);
        
    }

    public static function  createPersonFromArray(array $array): Person{
        return new Person($array[0], $array[1]);
    
    }
 }