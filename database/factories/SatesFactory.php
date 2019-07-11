<?php

use Faker\Generator as Faker;

$factory->define(App\State::class, function (Faker $faker) {
    return [
        'state_name' => $faker->state,
    ];
});
