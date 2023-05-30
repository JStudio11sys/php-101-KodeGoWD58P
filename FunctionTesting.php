<?php
require 'phpFunctions.php';

use PHPUnit\Framework\TestCase;

class FunctionTesting extends TestCase{
    
    public function testCheckCharacter(){
        $checkOutput = checkCharacter('A');
        $this->assertEquals('The letter <b>A</b> is a VOWEL !', $checkOutput);

        $checkOutput2 = checkCharacter('B');
        $this->assertEquals('The letter <b>B</b> is a CONSONANT !', $checkOutput2);
    }


    public function testNumberAsWord(){
        $checkNumber = numberAsWord(1);
        $this->assertEquals('ONE - ', $checkNumber);
    }

    function testDivisibleByThree(){
        $checkNumber2 = divisibleByThree(15);
        $this->assertEquals('The number <b>15</b> is DIVISIBLE by 3', $checkNumber2);
    }

    
    function testDeleteRecurring(){
        $arraySample = ["Joshua","Joshua","Joshua"];

        $checkArray = deleteRecurring($arraySample);
        $this->assertSame('Joshua <br />', $checkArray);
    }
    

    function testArmstrongNumber(){
        $armstrongCheck = armstrongNumber(153);
        $this->assertEquals('The entered number : 153 - is an ARMSTRONG NUMBER!');
    }

}

