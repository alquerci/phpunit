<?php
class PHPUnit_Tests_Fixtures_IncompleteTest extends PHPUnit_Framework_TestCase
{
    public function testIncomplete()
    {
        $this->markTestIncomplete('Test incomplete');
    }
}
