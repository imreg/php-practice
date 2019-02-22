<?php

namespace Practice;

class Valley
{
    public function countingValleys($n, $s)
    {
        $steps = 0;
        $valley = 0;
        for ($index = 0; $index < $n; $index++) {
            if ($s[$index] == 'U') {
                $steps += 1;
            } else if ($s[$index] == 'D') {
                if($steps === 0) {
                    $valley++;
                }
                $steps -= 1;
            }
        }

        return $valley;
    }
}
