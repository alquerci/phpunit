--TEST--
GH-244: Expected Exception should support string codes
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = 'Issue244Test';
$_SERVER['argv'][4] = dirname(__FILE__).'/244/Issue244Test.php';

require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

.FFF

Time: %i %s, Memory: %sMb

There were 3 failures:

1) PHPUnit_Tests_Regression_244_Issue244TestIssue244Test::testFails
Failed asserting that '123StringCode' is equal to expected exception code 'OtherString'.

%s:%i

2) PHPUnit_Tests_Regression_244_Issue244TestIssue244Test::testFailsTooIfExpectationIsANumber
Failed asserting that '123StringCode' is equal to expected exception code 123.

%s:%i

3) PHPUnit_Tests_Regression_244_Issue244TestIssue244Test::testFailsTooIfExceptionCodeIsANumber
Failed asserting that 123 is equal to expected exception code '123String'.

%s:%i

FAILURES!
Tests: 4, Assertions: 8, Failures: 3.
