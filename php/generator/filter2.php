<?php

declare(strict_types=1); ?>

<body>
    <?php
    function images(string $dirName, int $lowerSize)
    {
        $files = new DirectoryIterator($dirName);
        foreach ($files as $file) {
            if (!$file->isFile()) {
                continue;
            }
            if (!in_array($file->getExtension(), ['jpg', 'jpeg', 'gif', 'png', 'svg', 'bmp'])) {
                continue;
            }
            if ($file->getSize() < $lowerSize) {
                continue;
            }
            yield $file->getFilename();
        }
    }
    foreach (images(dirname(__FILE__) . '/uploaded', 1 * 1024 * 1024) as $image) {
        echo $image, 'をリサイズ処理しました。', PHP_EOL;
    }
    ?>
</body>