<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Route;
use Faker\Generator as Faker;

$factory->define(Route::class, function (Faker $faker) {
  return [
    'name' => $faker->sentence(2),
    'grade' => '9b',
    'country' => $faker->country,
    'crag' => $faker->word,
    'type' => $faker->randomElement(['boulder' ,'sport']),
  ];
});
