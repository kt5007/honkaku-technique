<?php

declare(strict_types=1);
?>

<body>
    <?php
        function excelColumnNames()
        {
            // 1文字の列名の生成をサブジェネレーター1に任せる
            yield from excelColumnNamesOf1Character();
    
            // 2文字の列名の生成をサブジェネレーター2に任せる
            yield from excelColumnNamesOf2Characters();
        }

        function excelColumnNamesOf1Character()
        {
            foreach (range('A','Z') as $columnName) {
                yield $columnName;
            }
        }
        function excelColumnNamesOf2Characters()
        {
            foreach (range('A','Z') as $columnName1) {
                foreach (range('A','Z') as $columnName2) {
                    yield $columnName1 . $columnName2;
                }
            }
        }
        foreach (excelColumnNames() as $excelColumnName) {
            echo $excelColumnName , PHP_EOL;
        }
    ?>
</body>