<?php

class UserController extends BaseController {

  public function postAttempt()
  {
    if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
    {
      return Redirect::to('dashboard');
    }
    else
    {
      return Redirect::to('/');
    }
  }

}