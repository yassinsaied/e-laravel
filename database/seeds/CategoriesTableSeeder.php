<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR') ;
        $now = Carbon::now()->toDateTimeString();

        for ($i=0; $i <10 ; $i++) { 

            $nameSlug = $faker->unique()->word(10 ,false);
            Category::create([
             
                 "name" => $nameSlug ,
                 "slug" => $nameSlug,
                 "created_at" =>   $now ,
                 "updated_at" => $now ,

            ]);
        }

       
    }
}
