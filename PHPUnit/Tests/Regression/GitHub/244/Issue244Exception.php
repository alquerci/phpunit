<?php

class PHPUnit_Tests_Regression_244_Issue244Exception extends Exception
{
    public function __construct()
    {
        $this->code = '123StringCode';
    }
}
