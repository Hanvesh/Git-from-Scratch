<?php

namespace Calculator;

use Calculator\Operations\Exponent;
use Calculator\Operations\Modulus;
use Calculator\Operations\Square;

class Calculator
{
    function exponent($num, $exponent): int
    {
        $exponentObj = new Exponent($num, $exponent);
        return $exponentObj->compute();
    }
    function Modulus($num1, $num2): int
    {
        $ModulusObj = new Modulus($num1, $num2);
        return $ModulusObj->modulo();
    }
    function Square($num): int{
        $SquareObj = new Square($num);
        return $SquareObj->sqr();
    }
    // Write your functions below

}
