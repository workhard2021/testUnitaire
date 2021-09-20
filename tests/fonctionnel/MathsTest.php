<?php
namespace App\tests;
use App\Math;
use PHPUnit\Framework\TestCase;

class MathsTest extends TestCase
{

   public function test_sommes()
   {
      $a = Math::somme(1, 3);
      $this->assertTrue(5 > $a);
   }
}
