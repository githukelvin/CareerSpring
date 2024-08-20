<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingInstitution>
 */
class TrainingInstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'faculty_dean_name' => $this->faker->name,
            'faculty_name' => $this->faker->randomElement(['FAST', 'FSST', 'FISS']),
            'contact_address' => $this->faker->address(),
            'tel_no' => $this->faker->phoneNumber,
            'school_name' => $this->faker->company,
            'director_name' => $this->faker->name,
            'director_email' => $this->faker->email,
            'department_name' => $this->faker->randomElement(['CT', 'CCN', 'IT']),
            'chairperson_name' => $this->faker->name,
            'chairperson_tel' => $this->faker->phoneNumber,
        ];
    }
}
