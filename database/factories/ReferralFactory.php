<?php

use Faker\Generator as Faker;

$factory->define(App\Referral::class, function (Faker $faker) {
    return [
        //
        'patient_id' => $faker->numberBetween(1, 15),
        'from_physician_id' => $faker->numberBetween(1, 15),
        'to_hospital_id' => $faker->numberBetween(1, 15),
        'status' => $faker->randomElement($array = array ('Checked', 'Pending'))
    ];
});
