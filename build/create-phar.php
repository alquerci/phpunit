#!/usr/bin/env php
<?php
/* PHPUnit
 *
 * Copyright (c) 2001-2012, Sebastian Bergmann <sebastian@phpunit.de>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Sebastian Bergmann nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRIC
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

require_once dirname(__FILE__).'/../bootstrap.php';

$licenseLines = file(dirname(__FILE__) . '/../LICENSE');
$license = '/* ' . implode(" * ", $licenseLines) . ' */';

$stub = <<<ENDSTUB
#!/usr/bin/env php
<?php

{$license}

Phar::mapPhar('phpunit.phar');
require 'phar://phpunit.phar/phpunit.php';
__HALT_COMPILER();
ENDSTUB;

$phar = new Phar('phpunit.phar', 0, 'phpunit.phar');
$phar->startBuffering();

$files  = array_keys(PHPUnit_Util_GlobalState::phpunitFiles());
$offset = substr_count(dirname(__FILE__), DIRECTORY_SEPARATOR);

foreach ($files as $file) {
    $phar->addFile($file, join('/', array_slice(explode(DIRECTORY_SEPARATOR, $file), $offset)));
}

// Add the autoloader with an uniq name
$autoloaderClass = 'PHPUnit_Autoload'.sha1(uniqid(mt_rand(), true));

$content = file_get_contents(dirname(__FILE__).'/../PHPUnit/Autoload.php');
$content = str_replace('PHPUnit_Autoload', $autoloaderClass, $content);
$phar->addFromString('PHPUnit/Autoload.php', $content);

$content = file_get_contents(dirname(__FILE__).'/../bootstrap.php');
$content = str_replace('PHPUnit_Autoload', $autoloaderClass, $content);
$phar->addFromString('bootstrap.php', $content);

// Add phpunit binary
$content = file_get_contents(dirname(__FILE__).'/../phpunit.php');
$content = preg_replace('{^#!/usr/bin/env php\s*}', '', $content);
$phar->addFromString('phpunit.php', $content);

$phar->setStub($stub);
$phar->stopBuffering();
