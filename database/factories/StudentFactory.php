<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(['role' => 'Student'])->id,
            'admin_no' => $this->faker->unique()->numberBetween(10000, 99999),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'id_no' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'dob' => $this->faker->date('Y-m-d', '-18 years'),
            'course' => $this->faker->randomElement(['Communication and Computer Networks', 'Information Technology', 'Computer Technology']),
            'level' => $this->faker->randomElement(['Degree', 'Diploma']),
            'year' => $this->faker->numberBetween(1, 4),
            'home_address' => $this->faker->address,
            'tel_no' => $this->faker->phoneNumber,
            'progress_level' => $this->faker->numberBetween(10, 100),
            'next_of_kin_name' => $this->faker->name,
            'next_of_kin_relationship' => $this->faker->randomElement(['Parent', 'Sibling', 'Guardian']),
            'next_of_kin_address' => $this->faker->address,
            'next_of_kin_tel' => $this->faker->phoneNumber,
        ];
    }
}
