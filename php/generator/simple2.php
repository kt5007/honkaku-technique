<?php

declare(strict_types=1); ?>

<body>
    <?php
    function numbers()
    {
        for ($i = 1; $i <= 5; $i++) {
            yield $i; 
        }
        for ($i = 6; $i <= 10; $i++) {
            yield $i;
        }
    }
    foreach (numbers() as  $number) {
        echo $number, PHP_EOL;
    }
    ?>
</body>