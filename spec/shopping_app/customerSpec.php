<?php

namespace spec\shopping_app;

use PhpSpec\ObjectBehavior;
use \lib\shopping_app\customer;

class customerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(customer::class);
        
    }
}
