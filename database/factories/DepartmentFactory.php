<?php

use Faker\Generator as Faker;

$factory->define(App\Department::class, function (Faker $faker) {
    return [
        'dept_name' => $faker->jobTitle,
    ];
});
