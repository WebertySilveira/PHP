<?php

namespace src\Easy;

use Src\Easy\PalindromeCheck;
use PHPUnit\Framework\TestCase;

class PalindromeCheckTest extends TestCase
{
    public function testThisIsNotAPalindrome()
    {
        $text = "ovo";

        $verify = new PalindromeCheck();
        $this->assertEquals(true, $verify->solutionOne($text));
    }

    public function testThisIsAPalindrome()
    {
        $text = "dado";

        $verify = new \src\Easy\PalindromeCheck();
        $this->assertEquals(false, $verify->solutionOne($text));
    }
}