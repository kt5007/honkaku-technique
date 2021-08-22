<?php

declare(strict_types=1);

class ShoppingCart implements IteratorAggregate, ArrayAccess
{
    private $items = [];
    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }
    public function offsetSet($offset, $value)
    {
        if (!$value instanceof item) {
            throw new Exception('Itemインスタンスを指定してください。');
        }
        if (is_null($offset)) {
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }
    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }
    public function offsetGet($offset)
    {
        return isset($this->items[$offset]) ? $this->items[$offset] : null;
    }
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}
