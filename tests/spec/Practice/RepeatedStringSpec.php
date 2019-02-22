<?php

namespace spec\Practice;

use Practice\RepeatedString;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RepeatedStringSpec extends ObjectBehavior
{
    function it_should_return_an_integer_7_represent_letters_in_repeating_string()
    {
        $this->repeatedString('aba', 10)->shouldReturn(7);
    }

    function it_should_return_an_integer_4_represent_letters_in_repeating_string()
    {
        $this->repeatedString('abcac', 10)->shouldReturn(4);
    }

    function it_should_return_an_integer_164280_represent_letters_in_repeating_string()
    {
        $this->repeatedString('gfcaaaecbg', 547602)->shouldReturn(164280);
    }

    function it_should_return_an_integer_588525_represent_letters_in_repeating_string()
    {
        $this->repeatedString('aab', 882787)->shouldReturn(588525);
    }

    function it_should_return_an_integer_1000000000000_represent_letters_in_repeating_string()
    {
        $this->repeatedString('a', 1000000000000)->shouldReturn(1000000000000);
    }
}
