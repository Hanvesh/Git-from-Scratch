<?php

namespace Calculator;
use Calculator\Contracts\Contracts;
use Calculator\Operations\Add;
use Calculator\Operations\Exponent;
use Calculator\Operations\Modulus;
use Calculator\Operations\Square;
use Calculator\Operations\Subtraction;

class Calculator implements Contracts
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
    function Multiply($num1, $num2): int
    {
        $MultiplyObj = new Multiply($num1, $num2);
        return $MultiplyObj ->multiply();
    }
    function Divide($num1, $num2): int
    {
        $DivideObj = new Divide($num1, $num2);
        return $DivideObj ->divide();
    }
    function Percentage($num1, $num2): int
    {
        $PercentageObj = new Percentage($num1, $num2);
        return $PercentageObj->Percentage();
    }
    function Add($num1, $num2): int
    {
        $addObj = new Add($num1, $num2);
        return $addObj->compute();
    }
    function Subtract($num1, $num2): int
    {
        $subtractObj = new Subtraction($num1, $num2);
        return $subtractObj->subtract();
    }

    // Write your functions below

}
