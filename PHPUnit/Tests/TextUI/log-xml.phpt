--TEST--
phpunit --log-junit php://stdout BankAccountTest ../Fixtures/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--log-junit';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__).'/../Fixtures/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

...<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="PHPUnit_Tests_Fixtures_BankAccountTest" file="%s/BankAccountTest.php" fullPackage="PHPUnit" package="PHPUnit" tests="3" assertions="3" failures="0" errors="0" time="%f">
    <testcase name="testBalanceIsInitiallyZero" class="PHPUnit_Tests_Fixtures_BankAccountTest" file="%s/BankAccountTest.php" line="70" assertions="1" time="%f"/>
    <testcase name="testBalanceCannotBecomeNegative" class="PHPUnit_Tests_Fixtures_BankAccountTest" file="%s/BankAccountTest.php" line="80" assertions="1" time="%f"/>
    <testcase name="testBalanceCannotBecomeNegative2" class="PHPUnit_Tests_Fixtures_BankAccountTest" file="%s/BankAccountTest.php" line="100" assertions="1" time="%f"/>
  </testsuite>
</testsuites>


Time: %i %s, Memory: %sMb

OK (3 tests, 3 assertions)
