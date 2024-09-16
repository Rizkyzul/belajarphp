<?php
 class MathHelper{
    public static string $className = 'MathHelper';
    public static function average(float ...$arguments): float{
        if(count($arguments)===0)
        return 0;
        $total = array_sum($arguments) ; //array sum adalah fungsi built in dalam php 
        return $total / count($arguments);
    }
 }

//  echo MathHelper::$className . PHP_EOL;
//  echo MathHelper::average(1,2,3,4,5,6,7,8,9,10) . PHP_EOL; //averange adalah fungsi yang ada di class MathHelper