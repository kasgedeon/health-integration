<?php

use Faker\Generator as Faker;

$factory->define(App\Observation::class, function (Faker $faker) {
    return [
        //
        'referral_id' => $faker->numberBetween(1, 15),
        'description' => $faker->text(150),
        'actions' => $faker->text(100),
    ];
});
