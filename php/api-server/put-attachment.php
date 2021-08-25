<?php

declare(strict_types=1);
?>

<body>
    <?php
    $params = [
        'messageId' => 'm900001',
        'attachment' => base64_encode(file_get_contents('sun.jpg')),
    ];
    $url = 'http://localhost/api-server/message-attachment.php';
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