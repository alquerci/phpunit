<?php

class PHPUnit_Tests_Regression_783_ChildSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Child');
        $suite->addTestSuite('PHPUnit_Tests_Regression_783_OneTest');
        $suite->addTestSuite('PHPUnit_Tests_Regression_783_TwoTest');

        return $suite;
    }
}
