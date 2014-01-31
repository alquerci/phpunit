--TEST--
phpunit --process-isolation BankAccountTest ../Fixtures/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--process-isolation';
$_SERVER['argv'][3] = 'BankAccountTest';
$_SERVER['argv'][4] = dirname(__FILE__).'/../Fixtures/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

...

Time: %i %s, Memory: %sMb

OK (3 tests, 3 assertions)
