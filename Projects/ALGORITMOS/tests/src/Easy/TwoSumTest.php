<?php

namespace src\Easy;

use PHPUnit\Framework\TestCase;
use Src\Easy\TwoSum;

final class TwoSumTest extends TestCase
{
    private $numbers = [4, 1, 2, -2, 11, 15, 1, -1, -6, -4];
    private $target = 9;

    public function testSolutionOneCorrectResult()
    {
        $twoSum = new TwoSum();
        $this->assertEquals(
            '-2 + 11 = 9',
            $twoSum->solutionOne($this->numbers, $this->target)
        );
    }


}