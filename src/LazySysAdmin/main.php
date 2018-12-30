<?php declare(strict_types=1);

namespace LazySysAdmin;

use League\CLImate\CLImate;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Process\Process;
use function strlen;
use function getcwd;
use function iterator_to_array;
use function array_map;
use function substr;

/**
 * @param CLImate $console
 */
function main(CLImate $console): void
{
    $files =  iterator_to_array(
        Finder::create()
            ->in(getcwd())
            ->name('*.sh')
            ->files()
            ->getIterator()
    );
    if (0 === count($files)) {
        $console->error('No scripts found.');
        return;
    }

    $commands = array_map(function(SplFileInfo $file): string {
        $basename = $file->getBasename();
        return substr($basename, 0, strlen($basename) - 3);
    }, $files);
    $input = $console->checkboxes('select commands : ', $commands);
    /** @var string $command */
    foreach ($input->prompt() as $command) {
        /** @var SplFileInfo $file */
        $file = $files[$command];
        $process = new Process(['/bin/bash', (string) $file]);
        $process->setTty(true);
        $process->start();
        $process->wait();
    }
    $console->br(1);
    main($console);
}
