<?php

namespace Tests\Service;

use AoC\Service\FileService;
use PHPUnit\Framework\TestCase;
use AoC\Day1\Exception\FileNotFoundException;
use AoC\Day1\Exception\CanNotOpenFileException;

class TestFileService extends TestCase
{
    /** @throws CanNotOpenFileException|FileNotFoundException */
    public function testOpenNotExistingFile(): void
    {
        // THEN
        $this->expectException(FileNotFoundException::class);

        // GIVEN & WHEN
        (new FileService())->openFile(__DIR__, "NonExistingFile.txt");
    }
}
