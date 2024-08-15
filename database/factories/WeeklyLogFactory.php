<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\WeeklyLog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WeeklyLog>
 */
class WeeklyLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'log_id' => $this->faker->uuid(),
            'student_id' => Student::factory(),
            'week_number' => $this->faker->numberBetween(1, 12),
            'monday' => $this->faker->paragraph,
            'tuesday' => $this->faker->paragraph,
            'wednesday' => $this->faker->paragraph,
            'thursday' => $this->faker->paragraph,
            'friday' => $this->faker->paragraph,
            'student_remarks' => $this->faker->paragraph,
            'supervisor_remarks' => $this->faker->paragraph,
            'is_ready_for_assessment' => $this->faker->boolean,
        ];
    }
}
