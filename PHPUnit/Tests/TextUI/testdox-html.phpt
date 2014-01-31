--TEST--
phpunit --testdox-html php://stdout BankAccountTest ../../Samples/BankAccount/Tests/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--testdox-html';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__).'../../Samples/BankAccount/Tests/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

<html><body><h2 id="PHPUnit_Samples_BankAccount_Tests_BankAccountTest">PHPUnit_Samples_BankAccount_Tests_BankAccount</h2><ul>...<li>Balance is initially zero</li><li>Balance cannot become negative</li></ul></body></html>

Time: %i %s, Memory: %sMb

OK (3 tests, 3 assertions)
