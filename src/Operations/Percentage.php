<?php

namespace Calculator\Operations;

/**
 * @author Nikhil Parakh <nikhil.parakh@mpokket.com>
 */
class Percentage
{
    private $num1;
    private $num2;
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;//the number whose percentage is to be calculated
        $this->num2 = $num2;//the amount of percentage

    }
    public function Percentage(){
        return (($this->num2/$this->num1)*100);
    }
}