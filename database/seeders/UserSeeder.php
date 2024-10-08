<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// Create coordinator, lecturer, and director users Student
//Coordinator
//Lecturer
//Director
        User::factory()->create([
            'name' => 'Coordinator',
            'email' => 'coordinator@example.com',
            'password' => bcrypt('coordinator@example.com'),
            'role' => UserRole::Coordinator->value,
        ]);
        User::factory()->create([
            'name' => 'Lecturer',
            'email' => 'lecturer@example.com',
            'password' => bcrypt('lecturer@example.com'),
            'role' => UserRole::Lecturer->value,

        ]);
        User::factory()->create([
            'name' => 'director',
            'email' => 'director@example.com',
            'password' => bcrypt('director@example.com'),
            'role' => UserRole::Director->value,
        ]);
    }
}
