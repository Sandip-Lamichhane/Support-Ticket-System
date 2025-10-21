<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sandip Lamichhane',
            'email' => 'sandylamichhane10@gmail.com',
            'username' => 'sandy',
            'password' => Hash::make('sandip123'),
            'role' => 'Admin',
            'status' => 'Active',
        ]);
    }
}