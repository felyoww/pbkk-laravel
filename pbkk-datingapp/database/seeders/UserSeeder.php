<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the specific user first
        User::create([
            'name' => 'Fellyla Fiorenza',
            'username' => 'Kiyorin',
            'email' => 'fellyla.hyuga@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        // Create additional random users
        User::factory(5)->create();
    }
}
