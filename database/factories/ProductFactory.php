<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(0, 5),
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 200),
        'price' => $faker->numberBetween(20000, 100000),
        'discount' => $faker->numberBetween(1, 50),
        'status' => $faker->numberBetween(0, 1),
    ];
});
