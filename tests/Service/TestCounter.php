<?php

namespace Tests\Service;

use AoC\Service\CounterService;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class TestCounter extends TestCase
{
    public function testCounter(): void
    {
        // GIVEN
        $counter = new CounterService();

        // WHEN
        $counter->increase(30);
        // THEN
        assertEquals(30, $counter->getCounter());
    }
}
