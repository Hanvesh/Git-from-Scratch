<?php

namespace Calculator\Contracts;

interface Contracts
{
    function exponent($num, $exponent): int;

    function Modulus($num1, $num2): int;

    function Square($num): int;

    function Multiply($num1, $num2): int;

    function Divide($num1, $num2): int;

    function Add($num1, $num2): int;

    function Subtract($num1, $num2): int;
}