<?php

 class Singelton{
    private static ?Singelton $instance = null; 
    public string $database = '';
     private function  __construct(){

     }
     public static function getInstance():Singelton{
        if(self::$instance === null){
            self::$instance = new Singelton();
        }
        return self::$instance;
     }
     }