<?php

use Faker\Generator as Faker;

$factory->define(App\PatientHealthData::class, function (Faker $faker) {
    return [
        //
        'patient_id' => $faker->numberBetween(1, 15),
        'blood_type' => $faker->randomElement($array = array ('Group A', 'Group B', 'Group O', 'Group AB')),
        'food_allergies' => $faker->text(20),
        'drug_allergies' => $faker->text(20),
        'genetic_conditions' => $faker->text(20)
    ];
});
