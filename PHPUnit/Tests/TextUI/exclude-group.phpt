--TEST--
phpunit --exclude-group balanceIsInitiallyZero BankAccountTest ../Fixtures/BankAccountTest.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--exclude-group';
$_SERVER['argv'][3] = 'balanceIsInitiallyZero';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__).'/../Fixtures/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

..

Time: %i %s, Memory: %sMb

OK (2 tests, 2 assertions)
