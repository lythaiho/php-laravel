<?php

use Illuminate\Database\Seeder;

class liststudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\liststudent::class,10)->create();
    }
}
