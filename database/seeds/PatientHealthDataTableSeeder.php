<?php

use Illuminate\Database\Seeder;

class PatientHealthDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PatientHealthData::class, 15)->create();
    }
}
