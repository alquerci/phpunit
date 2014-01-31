<?php
class PHPUnit_Tests_Fixtures_Error extends PHPUnit_Framework_TestCase
{
    protected function runTest()
    {
        throw new Exception;
    }
}
