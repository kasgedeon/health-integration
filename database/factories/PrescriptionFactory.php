<?php

use Faker\Generator as Faker;

$factory->define(App\Prescription::class, function (Faker $faker) {
    return [
        //
        'referral_id' => $faker->numberBetween(1, 15),
        'medicine' => $faker->text(20),
        'description' => $faker->text(100),
    ];
});
