<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sandip Lamichhane',
            'username' => 'sandy',
            'email' => 'sandylamichhane10@gmail.com',
            'password' => 'sandip123', //auto hash
            'role' => 'SuperAdmin',
            'status' => 'Active',
        ]);
    }
}