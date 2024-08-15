<?php

namespace Database\Factories;

use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assessment>
 */
class AssessmentFactory extends Factory
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
            'lecturer_id' => Lecturer::factory(),
            'day_assessed' => $this->faker->date('Y-m-d', '-3 months'),
            'feedback' => $this->faker->paragraph(),
            'performance' => $this->faker->numberBetween(1, 100),
        ];
    }
}
