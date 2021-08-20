<?php

declare(strict_types=1);

class Validator{
    public function checkItemNumber(string $value)
    {
        return preg_match('/^[A-Z]{3}\-[0-9]{4}$/',$value)>0;
    }

    public function checkPrice($value)
    {
        return is_int($value) && intval($value)>0;
    }
}