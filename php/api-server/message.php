<?php

declare(strict_types=1);

function getMessage()
{
    $response = [
        'status' => 'success',
        'message' => 'userId:'.$_GET['userId'].'が持つ'.$_GET['days'].'日以内のメッセージをゲット。'
    ];
    return $response;
}
function postMessage()
{
    $response = [
        'status' => 'success',
        'message' => 'userId:'.$_POST['userId'].'によるメッセージ「'.$_POST['message'].'」を投稿しました。'
    ];
    return $response;
}
function putMessage()
{
    parse_str(file_get_contents('php://input'),$putRequest);
    $response = [
        'status' => 'success',
        'message' => 'messageId:'.$putRequest['messageId'].'のメッセージを「'.$putRequest['message'].'」に変更しました。'
    ];
    return $response;
}
function deleteMessage()
{
    parse_str(file_get_contents('php://input'),$deleteRequest);
    $response = [
        'status' => 'success',
        'message' => 'messageId:'.$deleteRequest['messageId'].'のメッセージを削除しました。'
    ];
    return $response;
}
switch(strtolower($_SERVER['REQUEST_METHOD'])){
    case 'get';
        echo json_encode(getMessage());
        break;
    case 'post';
        echo json_encode(postMessage());
        break;
    case 'put';
        echo json_encode(putMessage());
        break;
    case 'delete';
        echo json_encode(deleteMessage());
}

?>