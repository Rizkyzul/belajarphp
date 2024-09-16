<?php

 require_once('RouteFinder.php');

 $map = [
  'S' => [
    'A' => 2,
    'B' => 3,
  ],
  'A' => [
    'S' => 2,
    'C' => 6,
    'D' => 5,
  ],
  'B' => [
    'S' => 3,
    'C' => 3,
    'D' => 1,
  ],
  'C' => [
    'A' => 6,
    'B' => 3,
    'G' => 1,
  ],
  'D' => [
    'C' => 1,
    'D' => 7,
  ],
];


$routeFinder = new RouteFinder($map);
var_dump($routeFinder->findFastestRoute('S','D'));
