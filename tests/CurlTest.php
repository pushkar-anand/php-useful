<?php


use PhpUseful\Curl;
use PHPUnit\Framework\TestCase;

class CurlTest extends TestCase
{
    public function testIsThereAnySyntaxError()
    {
        $var = new Curl();
        $this->assertTrue(is_object($var));
        unset($var);
    }
}
