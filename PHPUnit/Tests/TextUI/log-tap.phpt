--TEST--
phpunit --log-tap php://stdout BankAccountTest ../Fixtures/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--log-tap';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__).'/../Fixtures/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

TAP version 13
.ok 1 - PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceIsInitiallyZero
.ok 2 - PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceCannotBecomeNegative
.ok 3 - PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceCannotBecomeNegative2
1..3


Time: %i %s, Memory: %sMb

OK (3 tests, 3 assertions)
