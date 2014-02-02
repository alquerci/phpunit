<?php
class PHPUnit_Tests_Regression_1021_Issue1021Test extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testSomething($data)
    {
        $this->assertTrue($data);
    }

    /**
     * @depends testSomething
     */
    public function testSomethingElse()
    {
    }

    public function provider()
    {
        return array(array(TRUE));
    }
}
