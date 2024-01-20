<?php

namespace AoC\Day1\Part2;

interface ConverterInterface
{
    public function convert(string $value): array;
}
