<?php

use Illuminate\Database\Seeder;

class PhysiciansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Physician::class, 10)->create();
    }
}
