<?php

use Laracasts\TestDummy\Factory;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function it_fetches_the_users_full_name()
    {
        $user = Factory::build('App\User', ['first_name' => 'John', 'last_name' => 'Doe']);

        $this->assertEquals('John Doe', $user->fullName());
    }
}
