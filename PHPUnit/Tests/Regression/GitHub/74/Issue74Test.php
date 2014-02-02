<?php
class PHPUnit_Tests_Regression_74_Issue74Test extends PHPUnit_Framework_TestCase
{
    public function testCreateAndThrowNewExceptionInProcessIsolation()
    {
        throw new PHPUnit_Tests_Regression_74_NewException('Testing GH-74');
    }
}