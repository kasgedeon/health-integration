<?php

use Faker\Generator as Faker;

$factory->define(App\Hospital::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->company,
        'ref_no' => str_random(10),
        'type' => $faker->randomElement($array = array (
            'General Hospital','Clinic','Specialized', 'Psychiatric', 'Rehab Center')),
        'address' => $faker->address,
        'website' => $faker->domainName,
        'mobile' => $faker->tollFreePhoneNumber,
    ];
});
