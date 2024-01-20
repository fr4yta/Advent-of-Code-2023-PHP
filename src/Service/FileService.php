<?php

namespace AoC\Service;

use AoC\Day1\Exception\CanNotOpenFileException;
use AoC\Day1\Exception\FileNotFoundException;

class FileService implements FileInterface
{
    /** @throws CanNotOpenFileException|FileNotFoundException */
    public function openFile(string $directory, string $filename): mixed
    {
        $filePath = sprintf('%s%s%s', $directory, FileInterface::DIRECTORY_SEPARATOR, $filename);

        if (!is_file($filePath)) {
            throw new FileNotFoundException();
        }

        $fileHandle = fopen($filePath, 'r');
        if (!$fileHandle) {
            throw new CanNotOpenFileException();
        }

        return $fileHandle;
    }

    public function closeFile(mixed $fileHandle): bool
    {
        return fclose($fileHandle);
    }
}
