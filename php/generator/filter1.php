<?php

declare(strict_types=1); ?>
<body>
    <?php
        $files = new DirectoryIterator(dirname(__FILE__) . '/uploaded');
        foreach ($files as $file) {
            if(!$file->isFile()){
                continue;
            }
            if(!in_array($file->getExtension(),['jpg','jpeg','gif','png','svg','bmp'])){
                continue;
            }
            if($file->getSize()<1*1024*1024){
                continue;
            }
            echo $file->getFilename(),'をリサイズ処理しました。',PHP_EOL;
        }
    ?>
</body>