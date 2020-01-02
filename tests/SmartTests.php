<?php

namespace Tests;

use App\Smart;
use PHPUnit\Framework\TestCase;

class SmartTests extends TestCase
{
    public function testIfElse()
    {
        $one = 1;

        $result = Smart::ifElse(
            1 === $one,
            'yes',
            'no'
        );

        $this->assertEquals('yes', $result);
    }
}