<?php

namespace Tests\Day1\Part2;

use AoC\Service\Buffer;
use PHPUnit\Framework\TestCase;
use AoC\Day1\Part2\Calibration;
use AoC\Day1\Part2\WordNumberConverter;

use function PHPUnit\Framework\assertEquals;

class TestCalibration extends TestCase
{
    private readonly Calibration $calibration;

    protected function setUp(): void
    {
        $this->calibration = new Calibration(new Buffer(), new WordNumberConverter());

        parent::setUp();
    }

    private function dataProvider(): array
    {
        return [
            'Set #1 (from example)' => [
                'input' => "two1nine",
                'expected' => 29,
            ],
            'Set #2 (from example)' => [
                'input' => "eightwothree",
                'expected' => 83
            ],
            'Set #3 (from example)' => [
                'input' => "abcone2threexyz",
                'expected' => 13
            ],
            'Set #4 (from example)' => [
                'input' => "xtwone3four",
                'expected' => 24
            ],
            'Set #5 (from example)' => [
                'input' => "4nineeightseven2",
                'expected' => 42
            ],
            'Set #6 (from example)' => [
                'input' => "zoneight234",
                'expected' => 14
            ],
            'Set #7 (from example)' => [
                'input' => "7pqrstsixteen",
                'expected' => 76
            ],
            'Set #8 (from file)' => [
                'input' => "6eight8jbtmxdqpj96mqkrdxt9tpbpppl",
                'expected' => 69
            ],
            'Set #9 (from file)' => [
                'input' => "xgbxvx7ninehmvqlldtxls88qhztfldr4",
                'expected' => 74
            ],
            'Set #10 (from file)' => [
                'input' => "68",
                'expected' => 68
            ],
            'Set #11 (from file)' => [
                'input' => "2zrxljdgsnnfour5fourp4",
                'expected' => 24
            ],
            'Set #12 (from file)' => [
                'input' => "sevensnmhgdxpbksngnflnthreemlqgdvphzk5tvmzjvdzbcseven",
                'expected' => 77
            ],
            'Set #13 (from file)' => [
                'input' => "ninefour5nbnnzhtfiveggrjf7zqzblbml",
                'expected' => 97
            ],
            'Set #14 (from file)' => [
                'input' => "cflpngxndfivefiveeight4rjrsfrmmtwonen",
                'expected' => 51
            ],
            'Set #15 (from file)' => [
                'input' => "eightfour2fourvzksqhxmlkpkfktmdzpmthreetwonehv",
                'expected' => 81
            ],
            'Set #16 (from file)' => [
                'input' => 'seven1cvdvnhpgthfhfljmnq',
                'expected' => 71
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
