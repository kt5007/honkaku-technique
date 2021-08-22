<?php

declare(strict_types=1); ?>
<body>
    <?php
    // range()と同じイメージ
    function numbers()
    {
        yield 1;
        yield 2;
        yield 3;
        yield 4;
        return;
        yield 5;
    }
    foreach (numbers() as $number) {
        echo $number, PHP_EOL;
    }
    ?>
</body>