<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'isAdmin' => true,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'super user',
            'email' => 'crud3swift@gmail.com',
            'isAdmin' => true,
            'password' => Hash::make('Password@1'),
        ]);
    }
}
