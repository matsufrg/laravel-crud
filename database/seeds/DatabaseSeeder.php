<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'João',
            'email' => 'joao@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        User::create([
            'name' => 'Roberto',
            'email' => 'matsufrg@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => true,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        User::create([
            'name' => 'Mariana',
            'email' => 'mariana@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        User::create([
            'name' => 'Joana',
            'email' => 'joana@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
