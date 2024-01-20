<?php

namespace AoC\Day1\Part2;

class WordNumberConverter implements ConverterInterface
{
    private array $dictionary = [
        '1' => 1,
        '2' => 2,
        '3' => 3,
        '4' => 4,
        '5' => 5,
        '6' => 6,
        '7' => 7,
        '8' => 8,
        '9' => 9,
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9
    ];

    public function convert(string $value): array
    {
        $result = [];

        foreach ($this->dictionary as $word => $number) {
            $positions = $this->findAllPositions($value, $word);
            $result += array_fill_keys($positions, $number);
        }

        ksort($result);

        return array_values($result);
    }

    private function findAllPositions(string $haystack, string $needle): array
    {
        $positions = [];

        $pos = strpos($haystack, $needle);

        while ($pos !== false) {
            $positions[] = $pos;
            $pos = strpos($haystack, $needle, $pos + 1);
        }

        return $positions;
    }
}

