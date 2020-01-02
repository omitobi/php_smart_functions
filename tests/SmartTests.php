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
        $third_array['c'] = 3;
        $fourth_array['d'] = 4;

        $result[] = Smart::arrConcat($first_array, $second_array);
        $result[] = Smart::arrConcat($first_array, $second_array, $third_array, $fourth_array);

        $this->assertEquals(
            ['a' => 1, 'b' => 2], $result[0]
        );

        $this->assertEquals(
            ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4], $result[1]
        );
    }

    public function testStrConcat()
    {
        $first_string = 'a';
        $second_string = 'b';

        $result = Smart::strConcat($first_string, $second_string);

        $this->assertEquals('ab', $result);
    }

    public function testEqual()
    {
        $first_item = 1;
        $second_item = '1';

        $result_1 = Smart::equal($first_item, $second_item);
        $result_2 = Smart::equal($first_item, $second_item, true);

        $this->assertTrue($result_1);
        $this->assertFalse($result_2);
    }
}