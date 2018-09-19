<?php

use Illuminate\Database\Seeder;

class PatientDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PatientDetail::class, 15)->create();
    }
}
