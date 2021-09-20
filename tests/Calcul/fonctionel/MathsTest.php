<?php
namespace App\tests;

use App\Maths;
use PHPUnit\Framework\TestCase;

class MathsTest extends TestCase{
    
   public function test_somme(){
        $a=Maths::somme(1,0);
        $this->assertEquals(1,$a);
   }
   public function test_soustraction()
   {
      $a = Maths::soustraire(4, 3);
      $this->assertEquals(1, $a);
   }
}