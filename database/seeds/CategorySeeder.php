<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Category::class,100)->create();
        //factory(\App\Brand::class,100)->create();
        //factory(\App\Product::class,5)->create();
        factory(\App\User::class,10)->create();
    }
}
