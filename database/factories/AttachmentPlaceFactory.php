<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttachmentPlace>
 */
class AttachmentPlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'organization_name' => $this->faker->company(),
            'physical_address' => $this->faker->address,
            'postal_address' => $this->faker->postcode(),
            'tel_no' => $this->faker->phoneNumber,
            'organization_email' => $this->faker->email(),
            'department_name' => $this->faker->randomElement(['CCN', 'IT', 'CT']),
            'head_name' => $this->faker->name,
            'supervisor_name' => $this->faker->name,
            'supervisor_tel' => $this->faker->phoneNumber,
            'designation' => $this->faker->jobTitle(),
            'signature' => $this->faker->name,
        ];
    }
}
