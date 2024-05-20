<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define data to insert
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'kaliyatilee@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
            // Add more users as needed
        ];

        // Insert data into the users table
        DB::table('users')->insert($users);
    }
}
