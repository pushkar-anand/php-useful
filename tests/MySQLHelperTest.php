<?php

use PHPUnit\Framework\TestCase;
use PhpUseful\MySQLHelper;

define('DB_SERVER', 'localhost');
define('DB_USER', 'test_user');
define('DB_PASS', 'testPwd');
define('DB_NAME', 'testDB');

class MySQLHelperTest extends TestCase
{

    public function testIsThereAnySyntaxError()
    {
        $var = null;
        try {
            $var = new MySQLHelper(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        } catch (Exception $e) {
            $this->fail($e);
        }
        $this->assertTrue(is_object($var));
        unset($var);
    }


}
