<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\Student;
use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::all()->each(function ($student) {
            Assessment::factory()->create([
                'student_id' => $student->student_id
            ]);
        });

    }
}
