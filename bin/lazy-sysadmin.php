<?php declare(strict_types=1);

use League\CLImate\CLImate;

$autoloadFiles = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../autoload.php',
];

$autoloaderFound = false;

foreach ($autoloadFiles as $autoloadFile) {
    if (! file_exists($autoloadFile)) {
        continue;
    }
    require_once $autoloadFile;
    $autoloaderFound = true;
}

if (false === $autoloaderFound) {
    echo 'vendor/autoload.php could not be found. Did you run `composer install`?', PHP_EOL;
    exit(1);
}

$console = new CLImate();

$console->clear(); // clear window
$console->green('lazy-sysadmin version 0.2');
$console->br(); // new line
$console->border(); // border
$console->br(); // new line

LazySysAdmin\main($console);
