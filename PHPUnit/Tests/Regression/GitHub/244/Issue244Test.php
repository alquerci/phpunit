<?php
class PHPUnit_Tests_Regression_244_Issue244Test extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Tests_Regression_244_Issue244Exception
     * @expectedExceptionCode 123StringCode
     */
    public function testWorks()
    {
        throw new PHPUnit_Tests_Regression_244_Issue244Exception;
    }

    /**
     * @expectedException PHPUnit_Tests_Regression_244_Issue244Exception
     * @expectedExceptionCode OtherString
     */
    public function testFails()
    {
        throw new PHPUnit_Tests_Regression_244_Issue244Exception;
    }

    /**
     * @expectedException PHPUnit_Tests_Regression_244_Issue244Exception
     * @expectedExceptionCode 123
     */
    public function testFailsTooIfExpectationIsANumber()
    {
        throw new PHPUnit_Tests_Regression_244_Issue244Exception;
    }

    /**
     * @expectedException PHPUnit_Tests_Regression_244_Issue244ExceptionIntCode
     * @expectedExceptionCode 123String
     */
    public function testFailsTooIfExceptionCodeIsANumber()
    {
        throw new PHPUnit_Tests_Regression_244_Issue244ExceptionIntCode;
    }
}
