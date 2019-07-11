<?php

use Faker\Generator as Faker;

$factory->define(App\Salary::class, function (Faker $faker) {
    return [
        's_amount' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
