<?php

namespace Tests\Day1\Part1;

use AoC\Day1\Part1\Calibration;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class TestCalibration extends TestCase
{
    private readonly Calibration $calibration;

    protected function setUp(): void
    {
        $this->calibration = new Calibration();

        parent::setUp();
    }

    private function dataProvider(): array
    {
        return [
            'Set #1 (from example)' => [
                'input' => "1abc2",
                'expected' => 12,
            ],
            'Set #2 (from example)' => [
                'input' => "pqr3stu8vwx",
                'expected' => 38
            ],
            'Set #3 (from example)' => [
                'input' => "a1b2c3d4e5f",
                'expected' => 15
            ],
            'Set #4 (from example)' => [
                'input' => "treb7uchet",
                'expected' => 77
            ],
            'Set $5 (from file)' => [
                'input' => "64eight6eight6gxdpmtnbfone",
                'expected' => 66
            ],
            'Set $6 (from file)' => [
                'input' => "eightfour2fourvzksqhxmlkpkfktmdzpmthreetwonehv",
                'expected' => 22
            ],
            'Set $7 (from file)' => [
                'input' => "15six44qndpslhnine8twonehkb",
                'expected' => 18
            ]
        ];
    }

    /** @dataProvider dataProvider() */
    public function testCalibration(string $input, int $expected): void
    {
        // GIVEN & WHEN
        $result = $this->calibration->doCalibration($input);

        // THEN
        assertEquals($expected, $result);
    }
}
