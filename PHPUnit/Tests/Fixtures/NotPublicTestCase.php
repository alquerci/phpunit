<?php
class PHPUnit_Tests_Fixtures_NotPublicTestCase extends PHPUnit_Framework_TestCase
{
    public function testPublic()
    {
    }

    protected function testNotPublic()
    {
    }
}
