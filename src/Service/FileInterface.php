<?php

namespace AoC\Service;

use AoC\Day1\Exception\CanNotOpenFileException;
use AoC\Day1\Exception\FileNotFoundException;

interface FileInterface
{
    const DIRECTORY_SEPARATOR = '/';

    /** @throws CanNotOpenFileException|FileNotFoundException */
    public function openFile(string $directory, string $filename): mixed;

    public function closeFile(mixed $fileHandle): bool;
}
