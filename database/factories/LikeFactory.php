<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
            'status_id' => random_int(1, 10),
            'likes_count' => $faker->randomDigitNotNull,
            'posted_at' => $faker->dateTimeThisYear(),
            'user_id' => random_int(1, 10)
    ];
});
