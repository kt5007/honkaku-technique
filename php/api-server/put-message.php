<?php

declare(strict_types=1);
?>

<body>
    <?php
    $params = [
        'userId' => 1001,
        'messageId' => 'm900001',
        'message' => '今日は晴天でしたが、のちに雨となりました。',
    ];
    $url = 'http://localhost/api-server/message.php';
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $apiResponse = json_decode(curl_exec($handle), true);
    curl_close($handle);
    ?>
    <p>サーバーからの応答</p>
    <pre><?php print_r($apiResponse); ?></pre>
</body>