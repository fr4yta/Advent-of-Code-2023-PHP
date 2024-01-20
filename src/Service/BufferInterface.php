<?php

namespace AoC\Service;

interface BufferInterface
{
    public function addToBuffer(mixed $value): void;
    public function clearBuffer(): void;
    public function isTheSame(array $data): bool;

    /** @return int[] */
    public function getFirstAndLastElements(): array;
}
