<?php

declare(strict_types=1);

// ショッピングカートを表すクラス。
// Itemインスタンスの配列をプロパティとして持つ。
class ShoppingCart implements IteratorAggregate //interface
{
    private $items = [];

    // 商品を追加します。
    public function addItem(Item $item): void
    {
        $this->items[$item->getItemNumber()] = $item;
    }
    
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}