<?php

namespace src\Easy;

class PalindromeCheck
{
    private $reversedText;

    /**
     * @param string $text
     * @return bool
     */
    public function solutionOne(string $text): bool
    {
        for ($i = strlen($text) - 1; $i >= 0; $i--) {
            $this->reversedText .= $text[$i];
        }

        if ($this->reversedText != $text) {
            return false;
        }

        return true;
    }
}