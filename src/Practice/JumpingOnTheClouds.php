<?php

namespace Practice;

class JumpingOnTheClouds
{
    public function jumpingOnClouds($c)
    {
        $jump = 0;
        $index = 0;

        while ($index < count($c) - 1) {
            if ($index + 2 < count($c) && $c[$index + 2] === 0) {
                $index += 1;
            }

            $index += 1;
            $jump += 1;
        }

        return $jump;
    }
}
