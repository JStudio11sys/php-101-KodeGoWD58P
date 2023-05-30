<?php

require 'OOP.php';

use PHPUnit\Framework\TestCase;

class ShapeTest extends TestCase{

    public function testComputeArea(){

        $shape = new Shape(4, 4);
        $area = $shape->computeArea();
        $perimeter = $shape->computePerimeter();

        $this->assertEquals('16 sqcm', $area);
        $this->assertEquals('16 sqcm', $perimeter);

    }

    public function testCheckIfVowelOrConsonant(){

        $output = checkIfVowelOrConsonant('a');
        $this->assertEquals('A is a vowel', $output);

        $output1 = checkIfVowelOrConsonant('b');
        $this->assertEquals('B is a consonants', $output1);

        $output2 = checkIfVowelOrConsonant(2);
        $this->assertEquals('2 is a consonants', $output2);

    }

}