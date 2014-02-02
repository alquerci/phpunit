<?php
class PHPUnit_Tests_Regression_503_Issue503Test extends PHPUnit_Framework_TestCase
{
    public function testCompareDifferentLineEndings()
    {
        $this->assertSame(
            "foo\n",
            "foo\r\n"
        );
    }
}
