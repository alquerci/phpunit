--TEST--
phpunit --testdox-text php://stdout BankAccountTest ../Fixtures/BankAccountTest.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--testdox-text';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__).'/../Fixtures/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

PHPUnit_Tests_Fixtures_BankAccount
... [x] Balance is initially zero
 [x] Balance cannot become negative



Time: %i %s, Memory: %sMb

OK (3 tests, 3 assertions)
