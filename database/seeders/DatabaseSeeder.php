<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Admin User',
            'email'    => 'admin@example.com',
            'password' => 'password123',
            'role'     => 'admin',
        ]);

        User::create([
            'name'     => 'Regular User',
            'email'    => 'user@example.com',
            'password' => 'password123',
            'role'     => 'user',
        ]);
    }
}