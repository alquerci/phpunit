<?php
class PHPUnit_Tests_Fixtures_Failure extends PHPUnit_Framework_TestCase
{
    protected function runTest()
    {
        $this->fail();
    }
}
