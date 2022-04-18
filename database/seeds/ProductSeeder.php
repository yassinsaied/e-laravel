<?php


use App\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');

        for ($i = 0; $i < 30; $i++) {

            Product::create([

                'name' => $faker->name(),
                'slug' => $faker->slug(),
                'details' => $faker->text(200),
                'price' => $faker->randomFloat(2, 5, 50),
                'description' => $faker->text(500)
            ]);
        }
    }
}
