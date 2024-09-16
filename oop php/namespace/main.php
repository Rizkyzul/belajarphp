<?php
  require_once('class/Membership.php');

//kode lama
//   $membership = new \Club\Sport\Membership();
//   echo \Club\Sport\VERSION;
//   echo \Club\Sport\test();
//   $membership->info();

//   $membership = new \Club\Art\Membership();
//   echo \Club\Art\VERSION;
//   $membership->info();

//kode baru dengan use

use \Club\Sport\Membership;
use \Club\Art\Membership as MembershipArt;

$membership = new Membership();
use const \Club\Sport\VERSION;
echo VERSION . PHP_EOL;
use function \Club\Sport\test;
test();
$membership->info();

$membership = new MembershipArt();
$membership->info();

//import function
use function \Club\Art\test as testArt;
testArt();

//akses konstanta
use const \Club\Art\VERSION as VERSION_ART;
echo VERSION_ART . PHP_EOL;



