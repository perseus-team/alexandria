<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PhysicalCopy;
use Faker\Generator as Faker;

$factory->define(PhysicalCopy::class, function (Faker $faker) {
    return [
        'book_id'=>factory(\App\Book::class)->create()->id,
        "location" => $faker->randomElement([null, $faker->city . ", " . $faker->country]),
        "notes" => $faker->realText(200, 2),
        'user_id'=>factory(\App\User::class)->create()->id
    ];
});
