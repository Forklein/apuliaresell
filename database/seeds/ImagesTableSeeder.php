<?php

use App\Models\Category;
use App\Models\Image;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = Category::all()->pluck('id')->toarray();

        for ($i = 0; $i < 20; $i++) {
            $image = new Image();
            $image->name = $faker->words(3, true);
            $image->image = $faker->imageUrl(300, 300);
            $image->visibility = 1;
            $image->category_id = Arr::random($categories);
            $image->user_id = 1;
            $image->save();
        }
    }
}
