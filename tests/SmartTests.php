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

    public function testArrConcat()
    {
        $first_array['a'] = 1;
        $second_array['b'] = 2;

        $result = Smart::arrConcat($first_array, $second_array);

        $this->assertEquals(
            ['a' => 1, 'b' => 2], $result
        );
    }

    public function testStrConcat()
    {
        $first_string = 'a';
        $second_string = 'b';

        $result = Smart::strConcat($first_string, $second_string);

        $this->assertEquals('ab', $result);
    }
}