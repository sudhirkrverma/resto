<?php

use Illuminate\Database\Seeder;

class restaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\restaurants::class,10)->create();
    }
}
