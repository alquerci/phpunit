--TEST--
phpunit --testdox-html php://stdout BankAccountTest ../Fixtures/BankAccountTest.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--testdox-html';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__).'/../Fixtures/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

<html><body><h2 id="PHPUnit_Tests_Fixtures_BankAccountTest">PHPUnit_Tests_Fixtures_BankAccount</h2><ul>...<li>Balance is initially zero</li><li>Balance cannot become negative</li></ul></body></html>

Time: %i %s, Memory: %sMb

OK (3 tests, 3 assertions)
