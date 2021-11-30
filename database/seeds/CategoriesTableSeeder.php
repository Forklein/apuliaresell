<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            [
                'name' => 'Jordan 1 High',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Yeezy',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Dunk Low',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Dunk High',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Jordan 1 Low',
                'color' => $faker->hexColor()
            ],
        ];

        foreach ($categories as $category) {
            $new_category = new Category;
            $new_category->fill($category);
            $new_category->save();
        }
    }
}
