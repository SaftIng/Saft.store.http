<?php

/*
 * This file is part of Saft.
 *
 * (c) Konrad Abicht <hi@inspirito.de>
 * (c) Natanael Arndt <arndt@informatik.uni-leipzig.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__.'/../vendor/autoload.php';

error_reporting(E_ALL);

global $config;
if (\file_exists(__DIR__.'/config.php')) {
    $config = require __DIR__.'/config.php';
} else {
    $config = [
        'query-url' => 'http://localhost:8890/sparql'
    ];
}
