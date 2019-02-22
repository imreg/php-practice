<?php

namespace Practice;

class SocksMerchant
{
    public function sockMerchant($n, $ar)
    {
        $array = [];
        for ($index = 0; $index < $n; $index++) {
            $key = $ar[$index];
            if (array_key_exists($key, $array)) {
                $array[$key] += 1;
            } else {
                $array[$key] = 1;
            }
        }

        $number = 0;
        foreach ($array as $color) {
            $number += (int)($color / 2);
        }

        return $number;
    }
}
