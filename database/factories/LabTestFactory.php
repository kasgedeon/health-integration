<?php

use Faker\Generator as Faker;

$factory->define(App\LabTest::class, function (Faker $faker) {
    return [
        //
        'referral_id' => $faker->numberBetween(1, 15),
        'name' => $faker->text(25),
        'result' => $faker->text(25),
    ];
});
