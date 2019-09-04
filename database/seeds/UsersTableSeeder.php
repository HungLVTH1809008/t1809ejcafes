<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class,50)->create();
        //factory(App\Product::class,20)->create();
       // factory(App\Customer::class,100)->create();
       // factory(App\Employees::class,20)->create();

        factory(App\User::class,100)->create();

    }
}
