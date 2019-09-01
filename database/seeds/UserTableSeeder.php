<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'name' => 'John Doe',
      'email' => 'admin@test.com',
      'email_verified_at' => now(),
      'password' => bcrypt('password'), // password
      'remember_token' => Str::random(10),
    ]);
  }
}
