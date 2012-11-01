<?php
/**
 * PHP Short Unique ID
 *
 * Copyright (c) 2012 Brett O'Donnell <brett@mrphp.com.au>
 * Source Code: https://github.com/cornernote/php-short-unique-id
 * Home Page: http://mrphp.com.au/blog/short-unique-id-php
 * License: GPLv3
 */

$timer = microtime(true);

require('Suid.php');

echo Suid::encode(99999999999999) . '<br/>';
echo Suid::decode('wx1s70pfeq') . '<br/>';

echo Suid::encode("1000000000000000000000000000000") . '<br/>';
echo Suid::decode('q1iawi55fde3nm7hh68i') . '<br/>';

echo round(microtime(true) - $timer, 4);