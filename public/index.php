<?php

require __DIR__ . '/app/functions.php';

$config = require __DIR__ . '/config.php';

$file = isset($_COOKIE['lang']) && array_key_exists($_COOKIE['lang'], $config['lang']) ?
    $config['lang'][$_COOKIE['lang']] :
    $config['lang']['ru'];

/** @noinspection PhpIncludeInspection */
$content = require $file;

require __DIR__ . '/app/layout.php';
