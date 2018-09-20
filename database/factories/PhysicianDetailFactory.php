<?php

use Faker\Generator as Faker;

$factory->define(App\PhysicianDetail::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->title,
        'address' => $faker->address,
        'mobile' => $faker->tollFreePhoneNumber,
        'email' => $faker->safeEmail,
        'specialty' => $faker->randomElement($array = array (
            'Cardiology', 'Neurology', 'Emergency Medecine', 'Pediatry',
            'MAnesthesy', 'Psychiatry', 'Gynecology', 'Ophthalmology', 
            'Oncology', 'General Surgery', 'Radiology')),
        'physician_id' => $faker->numberBetween(1, 15),    
    ];
});
