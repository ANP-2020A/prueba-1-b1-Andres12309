<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Products::truncate();
        $faker = \Faker\Factory::create();
        // Crear Productos ficticios en la tabla
        for($i = 0; $i < 50; $i++) {
            Products::create([
                'name'=> $faker->name,
                'code'=> $faker->postcode,
                'price'=> $faker->randomFloat(2, 1, 100 ),
                //'status'=> $faker->,
                ]);
        }
    }
}
