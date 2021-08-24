<?php

declare(strict_types=1);
?>
<body>
    <?php
        require_once dirname(__FILE__) . '/InsecureHttpRequestException.php';
        require_once dirname(__FILE__) . '/InsecureLoginSessionException.php';

        function checkLoginSession()
        {
            throw new InsecureLoginSessionException('Login session has a invalid value!');
        }
        function writeSecurityLog(string $message)
        {
            file_put_contents('security.log',$message.PHP_EOL,FILE_APPEND);
        }
        try{
            checkLoginSession();
        }catch(InsecureHttpRequestException $e){
            echo 'security exceptions!　',$e->getMessage();
            writeSecurityLog($e->getMessage());
        }catch(InsecureLoginSessionException $e){
            echo 'security exceptrions!　',$e->getMessage();
            writeSecurityLog($e->getMessage());
        }catch(Exception $e){
            echo 'exception.',$e->getMessage();
        }
    ?>
</body>