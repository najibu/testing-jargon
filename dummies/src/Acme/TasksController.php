<?php

namespace Acme;

use Acme\Authorizer;

class TasksController
{
  protected $auth;
  
  protected $repository;

  public function __construct(Authorizer $auth)
  {
    $this->auth = $auth;
  }

  public function show()
  {
    var_dump($this->auth->guest());
    
    return 'a task';
  }
}
