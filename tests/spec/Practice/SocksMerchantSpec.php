<?php

namespace spec\Practice;

use Practice\SocksMerchant;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SocksMerchantSpec extends ObjectBehavior
{
    function it_must_return_the_number_2_of_matching_pairs_of_socks_if_7_socks_are_in_pale()
    {
        $this->sockMerchant(7, [1,2,1,2,1,3,2])->shouldReturn(2);
    }

    function it_must_return_the_number_3_of_matching_pairs_of_socks_if_9_socks_are_in_pale()
    {
        $this->sockMerchant(9, [10,20,20,10,10,30,50,10,20])->shouldReturn(3);
    }

    function it_must_return_the_number_6_of_matching_pairs_of_socks_if_15_socks_are_in_pale()
    {
        $this->sockMerchant(15, [6,5,2,3,5,2,2,1,1,5,1,3,3,3,5])->shouldReturn(6);
    }
}
