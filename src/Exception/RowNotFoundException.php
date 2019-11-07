<?php


namespace PhpUseful\Exception;

use Exception;

class RowNotFoundException extends Exception
{

    public function getErrorMessage()
    {
        return "No rows Found";
    }

}