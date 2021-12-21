<?php


namespace Calculator\Operations;

class Square
{
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    public function sqr()
    {
        return ($this->num * $this->num);
    }
}

