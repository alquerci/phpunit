<?php

class PHPUnit_Tests_Regression_244_Issue244ExceptionIntCode extends Exception
{
    public function __construct()
    {
        $this->code = 123;
    }
}
