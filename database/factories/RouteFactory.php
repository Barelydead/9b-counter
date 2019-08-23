<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Route;
use Faker\Generator as Faker;

$factory->define(Route::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'difficulty' => '9b',
      'location' => $faker->city,
    ];
});
