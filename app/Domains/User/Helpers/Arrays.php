<?php


namespace App\Domains\User\Helpers;


/**
 * Class Arrays
 * @package App\Domains\User\Helpers
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class Arrays
{
    /**
     * @param $except
     * @param $array
     * @return mixed
     */
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
