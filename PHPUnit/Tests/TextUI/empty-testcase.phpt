--TEST--
phpunit EmptyTestCaseTest ../Fixtures/EmptyTestCaseTest.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'EmptyTestCaseTest';
$_SERVER['argv'][3] = dirname(dirname(__FILE__)) . '/Fixtures/EmptyTestCaseTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

F

Time: %i %s, Memory: %sMb

There was 1 failure:

1) Warning
No tests found in class "PHPUnit_Tests_Fixtures_EmptyTestCaseTest".

%s:%i

FAILURES!
Tests: 1, Assertions: 0, Failures: 1.
