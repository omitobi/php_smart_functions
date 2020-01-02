<?php


namespace App;


class Smart
{
    /**
     * Let's make Tenary operator great again
     *
     * @param bool $condition
     * @param $result
     * @param $default
     * @return mixed
     */
    public static function ifElse(bool $condition, $result, $default)
    {
        return $condition
            ? $result
            : $default;
    }

    /**
     * Arrays can be concatenated also
     *
     * @param array $first
     * @param array $second
     * @return array
     */
    public static function arrConcat(array $first, array $second)
    {
        return $first + $second;
    }

    /**
     * Let's make String concatenation operator great again
     *
     * @param string $first
     * @param string $second
     * @return string
     */
    public static function strConcat(string $first, string $second)
    {
        return $first . $second;
    }
}