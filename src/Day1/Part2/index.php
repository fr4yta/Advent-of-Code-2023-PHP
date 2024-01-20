<?php

require_once '../../../vendor/autoload.php';

use AoC\Service\Buffer;
use AoC\Service\FileService;
use AoC\Day1\Part2\Calibration;
use AoC\Service\CounterService;
use AoC\Day1\Part2\WordNumberConverter;
use AoC\Day1\Exception\FileNotFoundException;
use AoC\Day1\Exception\CanNotOpenFileException;

$fileService = new FileService();
$calibration = new Calibration(
    new Buffer(),
    new WordNumberConverter(),
);
$counter = new CounterService();

try {
    $fileHandle = $fileService->openFile(__DIR__, 'input.txt');

    while (!feof($fileHandle)) {
        $line = fgets($fileHandle);
        $counter->increase($calibration->doCalibration($line));
    }

    echo sprintf('Total count after calibration: %d', $counter->getCounter());
} catch (CanNotOpenFileException|FileNotFoundException $e) {
    echo sprintf('Error: %s', $e->__toString());
}
