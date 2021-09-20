<?php
namespace App\tests;

use App\Form;
use PHPUnit\Framework\TestCase;

class FormTest extends TestCase {
    public function testForm(){

        $f=Form::form("circle");
        $this->assertSame('circle',$f);
    }
}