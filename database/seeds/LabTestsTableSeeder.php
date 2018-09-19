<?php

use Illuminate\Database\Seeder;

class LabTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\LabTest::class, 25)->create();
    }
}
