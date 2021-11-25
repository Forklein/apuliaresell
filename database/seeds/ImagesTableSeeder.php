<?php

use App\Models\Image;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 20; $i++) {
            $image = new Image();
            $image->name = $faker->words(3, true);
            $image->image = $faker->imageUrl(300, 300);
            $image->visibility = 1;
            $image->user_id = 1;
            $image->save();
        }
    }
}
