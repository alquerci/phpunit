--TEST--
phpunit TemplateMethodsTest ../Fixtures/TemplateMethodsTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'TemplateMethodsTest';
$_SERVER['argv'][3] = dirname(dirname(__FILE__)) . '/Fixtures/TemplateMethodsTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

PHPUnit_Tests_Fixtures_TemplateMethodsTest::setUpBeforeClass
PHPUnit_Tests_Fixtures_TemplateMethodsTest::setUp
PHPUnit_Tests_Fixtures_TemplateMethodsTest::assertPreConditions
PHPUnit_Tests_Fixtures_TemplateMethodsTest::testOne
PHPUnit_Tests_Fixtures_TemplateMethodsTest::assertPostConditions
PHPUnit_Tests_Fixtures_TemplateMethodsTest::tearDown
.PHPUnit_Tests_Fixtures_TemplateMethodsTest::setUp
PHPUnit_Tests_Fixtures_TemplateMethodsTest::assertPreConditions
PHPUnit_Tests_Fixtures_TemplateMethodsTest::testTwo
PHPUnit_Tests_Fixtures_TemplateMethodsTest::tearDown
PHPUnit_Tests_Fixtures_TemplateMethodsTest::onNotSuccessfulTest
FPHPUnit_Tests_Fixtures_TemplateMethodsTest::tearDownAfterClass


Time: %i %s, Memory: %sMb

There was 1 failure:

1) PHPUnit_Tests_Fixtures_TemplateMethodsTest::testTwo
Failed asserting that <boolean:false> is true.

%s

FAILURES!
Tests: 2, Assertions: 2, Failures: 1.
