<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'username' => 'JohnDoe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}