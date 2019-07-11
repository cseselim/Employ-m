<?php

use Faker\Generator as Faker;

$factory->define(App\City::class, function (Faker $faker) {
    return [
        'city_name' => $faker->city,
        'zip_code' => $faker->randomDigit,
    ];
});
