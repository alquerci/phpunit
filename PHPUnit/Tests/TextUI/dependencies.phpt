--TEST--
phpunit --verbose DependencyTestSuite ../Fixtures/DependencyTestSuite.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--verbose';
$_SERVER['argv'][3] = 'DependencyTestSuite';
$_SERVER['argv'][4] = dirname(dirname(__FILE__)) . '/Fixtures/DependencyTestSuite.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Test Dependencies
 PHPUnit_Tests_Fixtures_DependencySuccessTest
 ...

 PHPUnit_Tests_Fixtures_DependencyFailureTest
 FSS

Time: %i %s, Memory: %sMb

There was 1 failure:

1) PHPUnit_Tests_Fixtures_DependencyFailureTest::testOne

%s:%i
%s:%i

There were 2 skipped tests:

1) PHPUnit_Tests_Fixtures_DependencyFailureTest::testTwo
This test depends on "PHPUnit_Tests_Fixtures_DependencyFailureTest::testOne" to pass.

%s:%i

2) PHPUnit_Tests_Fixtures_DependencyFailureTest::testThree
This test depends on "PHPUnit_Tests_Fixtures_DependencyFailureTest::testTwo" to pass.

%s:%i

FAILURES!
Tests: 4, Assertions: 0, Failures: 1, Skipped: 2.
