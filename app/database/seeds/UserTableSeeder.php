<?php

class UserTableSeeder extends Seeder {

  public function run()
  {
    DB::table('users')->delete();

    User::create(
      array(
        'email' => 'admin@example.com',
        'username' => 'admin',
        'password' => Hash::make('1234')
      )
    );
  }

}