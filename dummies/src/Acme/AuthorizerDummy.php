<?php 

class AuthorizerDummy implements Authorizer {
  public function guest()
  {
    return null;
  }
}