<?php

class PHPUnit_Tests_Fixtures_DependencyTestSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Test Dependencies');

        $suite->addTestSuite('PHPUnit_Tests_Fixtures_DependencySuccessTest');
        $suite->addTestSuite('PHPUnit_Tests_Fixtures_DependencyFailureTest');

        return $suite;
    }
}
