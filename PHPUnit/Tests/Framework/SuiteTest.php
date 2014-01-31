<?php
/**
 * PHPUnit
 *
 * Copyright (c) 2002-2010, Sebastian Bergmann <sebastian@phpunit.de>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Sebastian Bergmann nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package    PHPUnit
 * @author     Sebastian Bergmann <sebastian@phpunit.de>
 * @copyright  2002-2010 Sebastian Bergmann <sebastian@phpunit.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://www.phpunit.de/
 * @since      File available since Release 2.0.0
 */

/**
 *
 *
 * @package    PHPUnit
 * @author     Sebastian Bergmann <sebastian@phpunit.de>
 * @copyright  2002-2010 Sebastian Bergmann <sebastian@phpunit.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://www.phpunit.de/
 * @since      Class available since Release 2.0.0
 */
class PHPUnit_Tests_Framework_SuiteTest extends PHPUnit_Framework_TestCase {
    protected $result;

    protected function setUp()
    {
        $this->result = new PHPUnit_Framework_TestResult;
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite;

        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testAddTestSuite'));
        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testInheritedTests'));
        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testNoTestCases'));
        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testNoTestCaseClass'));
        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testNotExistingTestCase'));
        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testNotPublicTestCase'));
        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testNotVoidTestCase'));
        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testOneTestCase'));
        $suite->addTest(new PHPUnit_Tests_Framework_SuiteTest('testShadowedTests'));

        return $suite;
    }

    public function testAddTestSuite()
    {
        class_exists('PHPUnit_Tests_Fixtures_OneTestCase');
        $suite = new PHPUnit_Framework_TestSuite(
          'PHPUnit_Tests_Fixtures_OneTestCase'
        );

        $suite->run($this->result);

        $this->assertEquals(1, count($this->result));
    }

    public function testInheritedTests()
    {
        class_exists('PHPUnit_Tests_Fixtures_InheritedTestCase');
        $suite = new PHPUnit_Framework_TestSuite(
          'PHPUnit_Tests_Fixtures_InheritedTestCase'
        );

        $suite->run($this->result);

        $this->assertTrue($this->result->wasSuccessful());
        $this->assertEquals(2, count($this->result));
    }

    public function testNoTestCases()
    {
        class_exists('PHPUnit_Tests_Fixtures_NoTestCases');
        $suite = new PHPUnit_Framework_TestSuite(
          'PHPUnit_Tests_Fixtures_NoTestCases'
        );

        $suite->run($this->result);

        $this->assertTrue(!$this->result->wasSuccessful());
        $this->assertEquals(1, $this->result->failureCount());
        $this->assertEquals(1, count($this->result));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNoTestCaseClass()
    {
        class_exists('PHPUnit_Tests_Fixtures_NoTestCaseClass');
        $suite = new PHPUnit_Framework_TestSuite(
          'PHPUnit_Tests_Fixtures_NoTestCaseClass'
        );
    }

    public function testNotExistingTestCase()
    {
        $suite = new PHPUnit_Tests_Framework_SuiteTest('notExistingMethod');

        $suite->run($this->result);

        $this->assertEquals(0, $this->result->errorCount());
        $this->assertEquals(1, $this->result->failureCount());
        $this->assertEquals(1, count($this->result));
    }

    public function testNotPublicTestCase()
    {
        class_exists('PHPUnit_Tests_Fixtures_NotPublicTestCase');
        $suite = new PHPUnit_Framework_TestSuite(
          'PHPUnit_Tests_Fixtures_NotPublicTestCase'
        );

        $this->assertEquals(2, count($suite));
    }

    public function testNotVoidTestCase()
    {
        class_exists('PHPUnit_Tests_Fixtures_NotVoidTestCase');
        $suite = new PHPUnit_Framework_TestSuite(
          'PHPUnit_Tests_Fixtures_NotVoidTestCase'
        );

        $this->assertEquals(1, count($suite));
    }

    public function testOneTestCase()
    {
        class_exists('PHPUnit_Tests_Fixtures_OneTestCase');
        $suite = new PHPUnit_Framework_TestSuite(
          'PHPUnit_Tests_Fixtures_OneTestCase'
        );

        $suite->run($this->result);

        $this->assertEquals(0, $this->result->errorCount());
        $this->assertEquals(0, $this->result->failureCount());
        $this->assertEquals(1, count($this->result));
        $this->assertTrue($this->result->wasSuccessful());
    }

    public function testShadowedTests()
    {
        class_exists('PHPUnit_Tests_Fixtures_OverrideTestCase');
        $suite = new PHPUnit_Framework_TestSuite(
          'PHPUnit_Tests_Fixtures_OverrideTestCase'
        );

        $suite->run($this->result);

        $this->assertEquals(1, count($this->result));
    }
}
