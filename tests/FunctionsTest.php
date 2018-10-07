<?php

use PHPUnit\Framework\TestCase;
use PhpUseful\Functions;

class FunctionsTest extends TestCase
{
    public function testIsThereAnySyntaxError()
    {
        $var = new Functions();
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testMethodRandomString()
    {
        $var = Functions::randomString(10);
        $this->assertTrue(is_string($var));
        $this->assertTrue(strlen($var) == 10);
        unset($var);
    }
}