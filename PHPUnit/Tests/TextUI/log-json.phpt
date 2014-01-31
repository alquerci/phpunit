--TEST--
phpunit --log-json php://stdout BankAccountTest ../Fixtures/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--log-json';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'BankAccountTest';
$_SERVER['argv'][5] = dirname(__FILE__).'../Fixtures/BankAccountTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

{"event":"suiteStart","suite":"PHPUnit_Tests_Fixtures_BankAccountTest","tests":3}{"event":"testStart","suite":"PHPUnit_Tests_Fixtures_BankAccountTest","test":"PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceIsInitiallyZero"}.{"event":"test","suite":"PHPUnit_Tests_Fixtures_BankAccountTest","test":"PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceIsInitiallyZero","status":"pass","time":%f,"trace":[],"message":""}{"event":"testStart","suite":"PHPUnit_Tests_Fixtures_BankAccountTest","test":"PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceCannotBecomeNegative"}.{"event":"test","suite":"PHPUnit_Tests_Fixtures_BankAccountTest","test":"PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceCannotBecomeNegative","status":"pass","time":%f,"trace":[],"message":""}{"event":"testStart","suite":"PHPUnit_Tests_Fixtures_BankAccountTest","test":"PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceCannotBecomeNegative2"}.{"event":"test","suite":"PHPUnit_Tests_Fixtures_BankAccountTest","test":"PHPUnit_Tests_Fixtures_BankAccountTest::testBalanceCannotBecomeNegative2","status":"pass","time":%f,"trace":[],"message":""}

Time: %i %s, Memory: %sMb

OK (3 tests, 3 assertions)
