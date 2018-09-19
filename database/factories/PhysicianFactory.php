<?php

use Faker\Generator as Faker;

$factory->define(App\Physician::class, function (Faker $faker) {
    return [
        //
        'first_name' => $faker->firstName,
        'other_names' => $faker->lastName,
        'ref_no' => str_random(10),
        'hospital_id' => $faker->randomDigit,
        'details_id' => $faker->randomDigit
    ];
});
