<?php

namespace Practice;

class RepeatedString
{
    public function repeatedString($s, $n)
    {
        $aCount = 0;
        for ($index = 0; $index < strlen($s); $index++) {
            if ($s[$index] === 'a') {
                $aCount += 1;
            }
        }

        $count = intdiv($n, strlen($s)) * $aCount;
        $rest = $n % strlen($s);

        if ($rest) {
            $str = substr($s,0, $rest);

            $restCount = 0;
            for ($index = 0; $index < strlen($str); $index++) {
                if ($str[$index] === 'a') {
                    $restCount += 1;
                }
            }
            $count += $restCount;
        }

        return $count;
    }
}
