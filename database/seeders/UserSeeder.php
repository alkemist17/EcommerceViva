<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fredys Fonseca Consuegra',
            'email' => 'alkemist17@gmail.com',
            'password' => Hash::make('K4l1gul4.')
        ]);
    }
}
