<?php

declare(strict_types=1);
class Calculator
{
    private $result;
    public static function newInstance(int $startValue)
    {
        return new Calculator($startValue);
    }
    
    private function __construct(int $startValue)
    {
        $this->result = $startValue;
    }

    public function add(int $value)
    {
        $this->result += $value;
        return $this;
    }

    public function subtract(int $value)
    {
        $this->result -= $value;
        return $this;
    }

    public function multiply(int $value)
    {
        $this->result*=$value;
        return $this;
    }

    public function divide(int $value)
    {
        $this->result/=$value;
        return $this;
    }

    public function getResult()
    {
        return $this->result;
    }
}
