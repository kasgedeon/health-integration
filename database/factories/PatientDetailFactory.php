<?php

use Faker\Generator as Faker;

$factory->define(App\PatientDetail::class, function (Faker $faker) {
    return [
        //
        'sex' => $faker->randomElement($array = array ('Male', 'Female')),
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'address' => $faker->address,
        'county' => $faker->state,
        'mobile' => $faker->tollFreePhoneNumber,
        'email' => $faker->safeEmail,
        'occupation' => $faker->jobTitle,
        'patient_id' => $faker->numberBetween(1, 15)
    ];
});
