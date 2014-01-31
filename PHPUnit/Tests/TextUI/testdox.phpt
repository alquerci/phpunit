--TEST--
phpunit --testdox php://stdout BankAccountTest ../../Samples/BankAccount/Tests/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--testdox';
$_SERVER['argv'][3] = 'BankAccountTest';
$_SERVER['argv'][4] = dirname(__FILE__).'../../Samples/BankAccount/Tests/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

PHPUnit_Samples_BankAccount_Tests_BankAccount
 [x] Balance is initially zero
 [x] Balance cannot become negative

