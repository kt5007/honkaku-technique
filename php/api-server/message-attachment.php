<?php

declare(strict_types=1);

function generateExtention($filePath)
{
    $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($fileInfo, $filePath);
    finfo_close($fileInfo);

    $extention = null;
    switch (strtolower($mimeType)) {
        case "image/jpeg";
            $extention = 'jpg';
            break;
        case "image/png";
            $extention = 'png';
            break;
        case "image/gif";
            $extention = 'gif';
            break;
    }
    return $extention;
}

parse_str(file_get_contents('php://input'), $request);
$tmpFileName = dirname(__FILE__) . '/' . date('Ymd-His') . '-' . random_int(100000, 999999);
file_put_contents($tmpFileName, base64_decode($request['attachment']));
$extention = generateExtention($tmpFileName);

if ($extention === null) {
    $response = [
        'status' => 'error',
        'message' => '許可されていないファイル形式です。',
    ];
    echo json_encode($response);
    return;
}

$savedFileName = dirname(__FILE__).'/attachment-'.$request['messageId'].'.'.$extention;
rename($tmpFileName,$savedFileName);

$response = [
    'status' => 'success',
    'message' => 'messageId：' . $request['messageId'] . 'のメッセージにファイルを添付しました。サーバー上のファイル名は' . basename($savedFileName) . 'になりました',
];
echo json_encode($response);
