<?php

require_once dirname(__FILE__) . '/PHPUnit/Autoload.php';

$loader =  PHPUnit_Autoload::getLoader();

$dir    = dirname(__FILE__) . '/PHPUnit';
$filter = PHP_CodeCoverage_Filter::getInstance();

$filter->addDirectoryToBlacklist(
    $dir . '/Extensions', '.php', '', 'PHPUNIT', FALSE
);

$filter->addDirectoryToBlacklist(
    $dir . '/Framework', '.php', '', 'PHPUNIT', FALSE
);

$filter->addDirectoryToBlacklist(
    $dir . '/Runner', '.php', '', 'PHPUNIT', FALSE
);

$filter->addDirectoryToBlacklist(
    $dir . '/TextUI', '.php', '', 'PHPUNIT', FALSE
);

$filter->addDirectoryToBlacklist(
    $dir . '/Util', '.php', '', 'PHPUNIT', FALSE
);

$filter->addFileToBlacklist($dir . '/Autoload.php', 'PHPUNIT', FALSE);

$filter->addFileToBlacklist(__FILE__, 'PHPUNIT', FALSE);

unset($dir, $filter);

return $loader;
