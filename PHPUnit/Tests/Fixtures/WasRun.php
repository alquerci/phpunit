<?php
class PHPUnit_Tests_Fixtures_WasRun extends PHPUnit_Framework_TestCase
{
    public $wasRun = FALSE;

    protected function runTest()
    {
        $this->wasRun = TRUE;
    }
}
