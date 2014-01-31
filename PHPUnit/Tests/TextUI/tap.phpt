--TEST--
phpunit --tap BankAccountTest ../../Samples/BankAccount/Tests/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--tap';
$_SERVER['argv'][3] = 'BankAccountTest';
$_SERVER['argv'][4] = dirname(__FILE__).'../../Samples/BankAccount/Tests/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
TAP version 13
ok 1 - PHPUnit_Samples_BankAccount_Tests_BankAccountTest::testBalanceIsInitiallyZero
ok 2 - PHPUnit_Samples_BankAccount_Tests_BankAccountTest::testBalanceCannotBecomeNegative
ok 3 - PHPUnit_Samples_BankAccount_Tests_BankAccountTest::testBalanceCannotBecomeNegative2
1..3
