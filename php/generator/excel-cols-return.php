<?php

declare(strict_types=1);
?>

<body>
    <?php
        function excelColumnNames()
        {
            $numOfYields = 0;
            $excelColumnNamesOf1Character = excelColumnNamesOf1Character();
            yield from $excelColumnNamesOf1Character;

            $excelColumnNamesOf2Characters = excelColumnNamesOf2Characters();
            yield from $excelColumnNamesOf2Characters;

            return $excelColumnNamesOf1Character->getReturn() + $excelColumnNamesOf2Characters->getReturn();
        }
        function excelColumnNamesOf1Character()
        {
            $numOfYields=0;
            foreach (range('A','Z') as $columnName) {
                yield $columnName;
                $numOfYields++;
            }
            return $numOfYields;
        }
        function excelColumnNamesOf2Characters()
        {
            $numOfYields=0;
            foreach (range('A','Z') as $columnName1) {
                foreach (range('A','Z') as $columnName2) {
                    yield $columnName1 . $columnName2;
                    $numOfYields++;
                }
            }
            return $numOfYields;
        }
        $excelColumnNames = excelColumnNames();
        foreach ($excelColumnNames as $excelColumnName) {
            echo $excelColumnName, PHP_EOL;
        }
        echo '生成した列の数:',$excelColumnNames->getReturn();
    ?>
</body>