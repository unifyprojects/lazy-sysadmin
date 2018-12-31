<?php declare(strict_types=1);

use League\CLImate\CLImate;

require_once __DIR__.'/../vendor/autoload.php';

$console = new CLImate();
$console->clear();
$console->green('lazy-sysadmin version 0.2');

LazySysAdmin\main($console);
