<?php
class PHPUnit_Tests_Fixtures_DependencySuccessTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }

    /**
     * @depends PHPUnit_Tests_Fixtures_DependencySuccessTest::testTwo
     */
    public function testThree()
    {
    }
}
