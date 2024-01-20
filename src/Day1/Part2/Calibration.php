<?php

namespace AoC\Day1\Part2;

use AoC\Service\Buffer;
use AoC\Day1\CalibrationInterface;

class Calibration implements CalibrationInterface
{
    public function __construct(
        private readonly Buffer $buffer,
        private readonly WordNumberConverter $numberConverter
    ) {}

    public function doCalibration(string $input): int
    {
        $this->buffer->clearBuffer();

        $tmpValue = "";
        for($i = 0; $i < strlen($input); ++$i) {
            $tmpValue .= $input[$i];

            $result = $this->numberConverter->convert($tmpValue);

            if (!empty($result) && !$this->buffer->isTheSame($result)) {
                $this->buffer->addToBuffer((int) end($result));
            }
        }

        $numbers = $this->buffer->getFirstAndLastElements();

        return (int) sprintf('%s%s', $numbers[0], $numbers[1]);
    }
}
