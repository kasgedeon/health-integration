<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        //
        'first_name' => $faker->firstName,
        'other_names' => $faker->lastName,
        'ref_no' => str_random(10),
        //'details_id' => $faker->numberBetween(1, 15),
        'created_by' => $faker->numberBetween(1, 10)     
    ];
});
