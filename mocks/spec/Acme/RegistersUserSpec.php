<?php

namespace spec\Acme;

use Acme\RegistersUser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Acme\UserRepository;
use Acme\Mailer;

class RegistersUserSpec extends ObjectBehavior
{
    function let(UserRepository $repository, Mailer $mailer)
    {
      $this->beConstructedWith($repository, $mailer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(RegistersUser::class);
    }

    function it_creates_a_new_user(UserRepository $repository)
    {
      $user = [ 'username' => 'Najibu', 'email' => 'najibu@example.com'];

      $repository->create($user)->shouldBeCalled();

      $this->register($user);
    }

    function it_sends_a_welcome_email(Mailer $mailer)
    {
      $user = [ 'username' => 'Najibu', 'email' => 'najibu@example.com'];

      $mailer->sendWelcome('najibu@example.com')->shouldBeCalled();

      $this->register($user);
    }
}
