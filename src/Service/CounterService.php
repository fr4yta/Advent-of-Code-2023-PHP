<?php

namespace AoC\Service;

class CounterService implements CounterInterface
{
    private int $counter = 0;

    public function increase(int $value): void
    {
        $this->counter += $value;
    }

    public function getCounter(): int
    {
        return $this->counter;
    }
}
