<?php

use PHPUnit\Framework\TestCase;


class EasyHeadersTest extends TestCase
{

    public function testIsThereAnySyntaxError()
    {
        $var = new \PhpUseful\EasyHeaders();
        $this->assertTrue(is_object($var));
        unset($var);
    }
    
}