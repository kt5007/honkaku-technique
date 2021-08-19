<?php declare(strict_types=1); 

class Item{

    public function __construct(string $name, int $price)
    {
        $this -> name = $name;
        $this -> price = $price;
    }

    public $name;
    public $price;
}

