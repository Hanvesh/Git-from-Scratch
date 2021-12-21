<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase{
    public function testModulus(){

        $calculator = new \Calculator\Calculator;
        $result = $calculator->Modulus(10,2);
        $result1 = $calculator->Modulus(5,2);
        $this->assertEquals(0,$result);
        $this->assertEquals(1,$result1);
    }
    public function testSquare(){

        $calculator = new \Calculator\Calculator;
        $result = $calculator->Square(10);
        $result2 = $calculator->Square(12);

        $this->assertEquals(100,$result);
        $this->assertEquals(144,$result2);
    }
    public function testExponent(){

        $calculator = new \Calculator\Calculator;
        $result = $calculator->exponent(2,3);

        $this->assertEquals(8,$result);
    }



}
