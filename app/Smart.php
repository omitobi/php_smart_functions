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
}