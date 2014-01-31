<?php

class PHPUnit_Tests_Fixtures_SleepTest extends PHPUnit_Extensions_PerformanceTestCase
{
    public function testSleepTwoSeconds()
    {
        sleep(2);
    }
}
