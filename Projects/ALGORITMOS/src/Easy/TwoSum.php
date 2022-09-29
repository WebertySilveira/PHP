<?php

namespace Src\Easy;

class TwoSum
{
    public $numbers;
    public $target;

    public function __construct($numbers, $target)
    {
        $this->target = $target;
        $this->numbers = $numbers;

        echo "<b>Two Sum</b>";
        echo "<br>* O(n²):<br><pre>";
        $this->solutionOne();
        echo "</pre>";

        echo "<br>* O(n):<br>";
        $this->solutionTwo();

        echo "<br>* O(n log(n)):<br>";
        $this->solutionThree();

        echo "<hr>";
    }

    private function solutionOne()
    {
        foreach ($this->numbers as $value1) :
            foreach ($this->numbers as $value2) :
                if ($value1 + $value2 == $this->target) :
                    echo"{$value1} + {$value2} = {$this->target} <br>";
                endif;
            endforeach;
        endforeach;
    }

    private function solutionTwo()
    {

    }

    private function solutionThree()
    {

    }
}