<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\TrainingInstitution;
use Illuminate\Database\Seeder;

class TrainingInstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::all()->each(function ($student) {
            TrainingInstitution::factory()->create([
                'student_id' => $student->student_id
            ]);
        });
    }
}
