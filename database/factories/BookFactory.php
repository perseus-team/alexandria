<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        "isbn" => $faker->isbn13,
        "title" => $faker->sentence(5),
        "cover" => $faker->imageUrl(396,576)
    ];
});
