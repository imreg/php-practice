<?php

namespace spec\Practice;

use Practice\JumpingOnTheClouds;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JumpingOnTheCloudsSpec extends ObjectBehavior
{
    function it_should_return_4_as_the_minimum_number_of_jumps_over_7_clouds()
    {
        $this->jumpingOnClouds([0,0,1,0,0,1,0])->shouldReturn(4);
    }

    function it_should_return_3_the_minimum_number_of_jumps_over_7_clouds()
    {
        $this->jumpingOnClouds([0,1,0,0,0,1,0])->shouldReturn(3);
    }

    function it_should_return_3_the_minimum_number_of_jumps_over_6_clouds()
    {
        $this->jumpingOnClouds([0,0,0,0,1,0])->shouldReturn(3);
    }
}
