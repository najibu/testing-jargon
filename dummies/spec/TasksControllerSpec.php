<?php

namespace spec\Acme;

use Acme\Authorizer;
use Prophecy\Argument;
use Acme\TasksController;
use PhpSpec\ObjectBehavior;



class TasksControllerSpec extends ObjectBehavior
{
    function let(Authorizer $auth)
    {
      $this->beConstructedWith($auth);
    }

  function it_shows_a_specific_task(Authorizer $auth)
  {
    $auth->guest()->willReturn(false);
    
    $this->show()->shouldReturn('a task');
  }

}
