<?php


namespace App\Domains\User\Helpers;


class Arrays
{
    public static function arrayExcept($except, $array)
    {
        foreach ($array as $key => $item) {
            if (in_array($key, $except)) {
                unset($array[$key]);
            }
        }

        return $array;
    }

}
