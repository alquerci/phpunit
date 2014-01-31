<?php
class PHPUnit_Tests_Fixtures_DependencyFailureTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $this->fail();
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }

    /**
     * @depends testTwo
     */
    public function testThree()
    {
    }
}
