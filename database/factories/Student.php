<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "name" = $faker->name,
        "class" = $faker->class,
        "section" = $faker->section,
        "roll" = $faker->roll,
        'email' => $faker->unique()->safeEmail
    ];
});
