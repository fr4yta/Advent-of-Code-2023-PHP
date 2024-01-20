<?php

namespace AoC\Service;

class Buffer implements BufferInterface
{
    private array $buffer = [];

    public function addToBuffer(mixed $value): void
    {
        $this->buffer[] = $value;
    }

    public function clearBuffer(): void
    {
        $this->buffer = [];
    }

    public function isTheSame(array $data): bool
    {
        return $this->buffer === $data;
    }

    /** @return int[] */
    public function getFirstAndLastElements(): array
    {
        return [
            reset($this->buffer),
            end($this->buffer)
        ];
    }
}
