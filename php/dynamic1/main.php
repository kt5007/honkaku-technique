<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<body>
<pre>
<?php
    require_once dirname(__FILE__) . '/Item.php';

    $items = [];
    $items[] = new Item('圧力鍋',6450);
    $items[] = new Item('電気ケトル',2000);

    $properties = [
        'name' => '商品名',
        'price' => '金額',
    ];

    foreach($items as $item){
        foreach ($properties as $property => $label) {
            
            echo $label , ':', $item->{$property},PHP_EOL;
        }
    }
?>
</body>
