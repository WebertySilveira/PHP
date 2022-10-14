<?php

namespace Src\Easy;

class TwoSum
{
    /**
     * O(n²)
     * @param $numbers
     * @param $target
     * @return string|void
     */
    public function solutionOne($numbers, $target)
    {
        foreach ($numbers as $value1) :
            foreach ($numbers as $value2) :
                if ($value1 + $value2 == $target) :
                    return "{$value1} + {$value2} = {$target}";
                endif;
            endforeach;
        endforeach;
    }

    /**
     * O(n)
     */
    public function solutionTwo()
    {

    }

    /**
     * O(n log(n))
     */
    public function solutionThree()
    {

    }
}