<?php

class PHPUnit_Tests_Regression_783_ParentSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Parent');
        $suite->addTest(PHPUnit_Tests_Regression_783_ChildSuite::suite());

        return $suite;
    }
}
