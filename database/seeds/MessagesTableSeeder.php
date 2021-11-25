<?php

use App\Models\Message;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 20; $i++) {
            $name = explode(' ', $faker->name());
            $message = new Message();
            $message->name = $name[0];
            $message->surname = $name[1];
            $message->email = $faker->email();
            $message->description = $faker->paragraph(2);
            $message->user_id = 1;
            $message->save();
        }
    }
}
