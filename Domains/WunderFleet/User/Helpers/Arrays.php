<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Helpers;


/**
 * Class Arrays
 * @package App\WunderFleet\User\Helpers
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
