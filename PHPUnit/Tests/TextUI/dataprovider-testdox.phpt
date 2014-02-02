--TEST--
phpunit --testdox DataProviderTest ../Fixtures/DataProviderTest.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--testdox';
$_SERVER['argv'][3] = 'DataProviderTest';
$_SERVER['argv'][4] = dirname(dirname(__FILE__)) . '/Fixtures/DataProviderTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

PHPUnit_Tests_Fixtures_DataProvider
 [ ] Add
