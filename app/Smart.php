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
     * @param array ...$second
     * @return array
     */
    public static function arrConcat(array $first, array ...$second)
    {
        $result = $first;

        foreach ($second as $item) {
            $result += $item;
        }

        return $result;
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

    /**
     * Equality operator 'Smartified'
     *
     * @param $first
     * @param $second
     * @param bool $strict
     * @return mixed
     */
    public static function equal($first, $second, bool $strict = false)
    {
        return self::ifElse(
            $strict,
            $first === $second,
            $first == $second
        );
    }

    /**
     * You've head of Head of Array in F# Yes, head returns array
     *
     * @param array $array
     * @return array
     */
    public static function arrHead(array $array)
    {
        $result = [];

        foreach ($array as $key => $item) {
            $result[$key] = $item;

            break;
        }

        return $result;
    }
}