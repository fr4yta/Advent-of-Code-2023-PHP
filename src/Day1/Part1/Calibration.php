<?php

namespace AoC\Day1\Part1;

use AoC\Day1\CalibrationInterface;

class Calibration implements CalibrationInterface
{
    public function doCalibration(string $input): int
    {
        $value = $this->extractIntegerFromString($input);
        $value = $this->concatenateIfSingleDigit($value);

        return $this->getFirstAndLastDigit($value);
    }

    private function extractIntegerFromString(string $input): string
    {
        return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
    }

    private function concatenateIfSingleDigit(string $value): string
    {
        $digits = str_split($value);

        return count($digits) === 1 ? $value . $value : $value;
    }

    private function getFirstAndLastDigit(string $value): int
    {
        $digits = str_split($value);

        if (count($digits) === 2) {
            return intval($value);
        }

        return intval($digits[0] . end($digits));
    }
}

