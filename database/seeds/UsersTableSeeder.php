<?php

use App\User;
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
        $data = [
            'name' => 'Apuliaresell',
            'email' => 'apuliaresell@gmail.com',
            'password' => bcrypt('password')
        ];
        $user = new User();
        $user->fill($data);
        $user->save();
    }
}
