<?php

declare(strict_types=1);
?>

<body>
    <?php
        require_once dirname(__FILE__).'/Calculator.php';
        $result = Calculator::newInstance(10)
            ->divide(2)
            ->multiply(20)
            ->subtract(15)
            ->add(5)
            ->getResult();

        echo '計算結果:',$result;
        
    ?>
</body>