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

    public function testMethodrandom_string()
    {
        $var = Functions::random_string(10);
        $this->assertTrue(is_string($var));
        unset($var);
    }
}