<?php
/**
 * @author Dmitriy Tyurin <fobia3d@gmail.com>
 */

// TODO: check include path INCLUDE_PATH%
// ini_set('include_path', ini_get('include_path'));

// put your code here
$file = __DIR__.'/../bootstrap.php';
if (file_exists($file)) {
    require_once $file;
}

$autoloadFile = __DIR__ . '/../../vendor/autoload.php';
if (!file_exists($autoloadFile)) {
    throw new RuntimeException('Install dependencies to run phpunit.');
}
require_once $autoloadFile;

$loader = new \Composer\Autoload\ClassLoader();
$loader->addClassMap(array(__DIR__));
$loader->register();
