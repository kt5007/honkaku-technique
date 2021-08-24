<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>マーカーインタフェース - honkaku</title>
</head>
<body>
<?php
    require_once dirname(__FILE__) . '/InsecureHttpRequestException.php';
    require_once dirname(__FILE__) . '/InsecureLoginSessionException.php';
    require_once dirname(__FILE__) . '/SecurityException.php';

    function chckLoginSession()
    {
        throw new InsecureLoginSessionException('Login session has a invalid value.');
    }
    function writeSecurityLog(string $message)
    {
        file_put_contents('security.log',$message.PHP_EOL,FILE_APPEND);
    }
    try{
        checkLoginSession();
    }catch(SecurityException $e){
        echo 'security exception',$e->getMessage();
    }catch(Exception $e){
        echo 'exception',$e->getMessage();
    }

?>
</body>
</html>