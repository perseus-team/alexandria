<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "bio" => $faker->sentence(5),
        "photo" => $faker->imageUrl(396,576),
    ];
});
