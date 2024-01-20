<?php

require_once '../../../vendor/autoload.php';

use AoC\Day1\Exception\CanNotOpenFileException;
use AoC\Day1\Exception\FileNotFoundException;
use AoC\Day1\Part1\Calibration;
use AoC\Service\CounterService;
use AoC\Service\FileService;

$fileService = new FileService();
$calibration = new Calibration();
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
