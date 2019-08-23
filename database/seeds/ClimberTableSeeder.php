<?php

use Illuminate\Database\Seeder;
use App\Climber;

class ClimberTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(Climber::class, 10)->create()->each(function ($climber) {
      $climber->routes()->attach(factory(App\Route::class, 3)->create()->pluck('id')->toArray());
    });
  }
}
