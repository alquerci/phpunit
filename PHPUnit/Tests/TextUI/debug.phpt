--TEST--
phpunit --debug BankAccountTest ../../Samples/BankAccount/Tests/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--debug';
$_SERVER['argv'][3] = 'BankAccountTest';
$_SERVER['argv'][4] = dirname(__FILE__).'../../Samples/BankAccount/Tests/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.


Starting test 'PHPUnit_Samples_BankAccount_Tests_BankAccountTest::testBalanceIsInitiallyZero'.
.
Starting test 'PHPUnit_Samples_BankAccount_Tests_BankAccountTest::testBalanceCannotBecomeNegative'.
.
Starting test 'PHPUnit_Samples_BankAccount_Tests_BankAccountTest::testBalanceCannotBecomeNegative2'.
.

Time: %i %s, Memory: %sMb

OK (3 tests, 3 assertions)
