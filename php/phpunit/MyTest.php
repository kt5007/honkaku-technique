<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function testException()
    {
        $this->expectException('Exception');
        $this->expectExceptionMessage('Invalid Number');
        $num = 999;
        if($num != 1){
            throw new Exception('Invalid Number.Try Another Number');
        }
    }
}