<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\WeeklyLog;
use Illuminate\Database\Seeder;

class WeeklyLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::all()->each(function ($student) {
            for ($week = 1; $week <= 12; $week++) {
                WeeklyLog::factory()->create([
                    'student_id' => $student->student_id,
                    'week_number' => $week,
                ]);
            }
        });
    }
}
