<?php

class AccountController extends BaseController {

  public function postLogin()
  {
    if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
    {
      return Redirect::to('dashboard');
    }
    else
    {
      if (empty(trim(Input::get('username'))) && empty(trim(Input::get('password'))))
      {
        return Redirect::to('/')->with('warning', 'Please provide username and password');
      }
      
      return Redirect::to('/')->with('error', 'Invalid username or password');
    }
  }

}