<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attachment>
 */
class AttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name(),
            'student_id' => Student::factory(),
            'registration_number' => $this->faker->bothify('???######'),
            'school_email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'course' => $this->faker->randomElement(['Computer Science', 'Business Administration', 'Engineering']),
            'year_of_study' => $this->faker->numberBetween(1, 4),
            'company_name' => $this->faker->company(),
            'location' => $this->faker->city(),
            'attachment_position' => $this->faker->jobTitle(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
