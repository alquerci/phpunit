<?php
class PHPUnit_Tests_Fixtures_ThrowExceptionTestCase extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        throw new RuntimeException;
    }
}
