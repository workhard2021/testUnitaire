<?php
namespace App\tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{
    
   public function test_somme(){
         $a=Math::somme(1,3);
         
         $this->assertTrue(5>$a);
   }
}