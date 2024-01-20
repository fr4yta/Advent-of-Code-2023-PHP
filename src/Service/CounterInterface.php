<?php

namespace AoC\Service;

interface CounterInterface
{
    public function increase(int $value): void;
}
