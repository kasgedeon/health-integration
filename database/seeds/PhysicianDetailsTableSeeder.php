<?php

use Illuminate\Database\Seeder;

class PhysicianDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PhysicianDetail::class, 10)->create();
    }
}
