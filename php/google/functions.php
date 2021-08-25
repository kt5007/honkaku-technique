<?php

define('API_KEY', 'AIzaSyB-eGzGMp_Bd5ZTeChedilAnQTUaVrfuic');

function analyzeSentiment($setence)
{
    $postData = [
        'document' => [
            'type' => 'PLAIN_TEXT',
            'language' => 'ja',
            'content' => $setence
        ],
        'encodingType' => 'UTF8',
    ];
    $postData = json_encode($postData);
    $url = 'https://language.googleapis.com/v1/documents:analyzeSentiment?key=' . API_KEY;
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLINFO_HEADER_OUT, true);
    curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($handle, CURLOPT_POSTFIELDS, $postData);
    curl_setopt(
        $handle,
        CURLOPT_HTTPHEADER,
        [
            'Content-Type:application/json',
            'Content-Length:' . strlen($postData)
        ]
    );
    $result = curl_exec($handle);
    curl_close($handle);
    return $result;
}
