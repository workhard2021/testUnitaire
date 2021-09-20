<?php
namespace App\tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{
    public function test_sub(){
        $b=Math::sub(2,1);
       $this->assertEquals($b,1);
    }
}