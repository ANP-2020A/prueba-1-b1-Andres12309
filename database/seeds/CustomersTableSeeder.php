<?php

use App\Customers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        Customers::truncate();
        $faker = \Faker\Factory::create();
        // Generar algunos customers para nuestra aplicacion
        $password = Hash::make('123123');
        for($i = 0; $i < 10; $i++) {
            Customers::create([
                'name'=> $faker->name,
                'email'=> $faker->email,
                'password'=> $password,
            ]);
        }
    }
}
