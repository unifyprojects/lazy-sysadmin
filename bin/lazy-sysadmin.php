<?php declare(strict_types=1);

use League\CLImate\CLImate;

require_once __DIR__.'/../vendor/autoload.php';

$console = new CLImate();

$console->clear(); // clear window
$console->green('lazy-sysadmin version 0.2');
$console->br(); // new line
$console->border(); // border
$console->br(); // new line

LazySysAdmin\main($console);
