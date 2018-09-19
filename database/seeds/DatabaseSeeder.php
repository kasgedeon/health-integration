<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(PhysiciansTableSeeder::class);
        //$this->call(PatientsTableSeeder::class);
        //$this->call(HospitalsTableSeeder::class);
        //$this->call(ObservationsTableSeeder::class);
        //$this->call(PrescriptionsTableSeeder::class);
        //$this->call(LabTestsTableSeeder::class);
        //$this->call(PatientDetailsTableSeeder::class);
        $this->call(PhysicianDetailsTableSeeder::class);
        $this->call(PatientHealthDataTableSeeder::class);
        $this->call(ReferralsTableSeeder::class);
    }
}
