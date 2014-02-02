--TEST--
phpunit PHPUnit_Tests_Fixtures_Calculator ../Fixtures/Calculator.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'PHPUnit_Tests_Fixtures_Calculator';
$_SERVER['argv'][3] = dirname(dirname(__FILE__)) . '/Fixtures/Calculator.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

....

Time: %i %s, Memory: %sMb

OK (4 tests, 4 assertions)
