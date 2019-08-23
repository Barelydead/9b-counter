<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Climber;
use Faker\Generator as Faker;

$factory->define(Climber::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'age' => $faker->numberBetween(12, 50),
      'country' => $faker->country,
    ];
});
