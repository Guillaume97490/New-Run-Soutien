<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'description' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        // 'updated_at' => $faker->date,
        // 'created_at' => $faker->date,
    ];
});
