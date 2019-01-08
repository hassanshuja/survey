<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'q_no' => $faker->q_no,
        'question' => $faker->question,
    ];
});
