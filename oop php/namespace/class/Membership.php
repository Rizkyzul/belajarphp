<?php
namespace Club\Sport{
 const VERSION = 'v1.0.0' . PHP_EOL;

 function test(): void{
   echo 'sakti wicaksana sport' . PHP_EOL;
 }


    class Membership{
        public function info(): void{
            echo "Membership Olahraga\n" . PHP_EOL;
        }
    }
}




 namespace Club\Art{
    const VERSION = 'v1.0.3' . PHP_EOL;
    function test(): void{
        echo 'sakti wicaksana art' . PHP_EOL;
      }
    class Membership{
        public function info(): void{
            echo "Membership Kesenian\n" . PHP_EOL;
        }
    }
 }


