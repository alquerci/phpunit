--TEST--
phpunit MultiDependencyTest ../Fixtures/MultiDependencyTest.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = 'MultiDependencyTest';
$_SERVER['argv'][3] = dirname(dirname(__FILE__)) . '/Fixtures/MultiDependencyTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/bootstrap.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

...

Time: %i %s, Memory: %sMb

OK (3 tests, 2 assertions)
