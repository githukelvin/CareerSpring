<?php

namespace Database\Seeders;

use App\Models\AttachmentPlace;
use App\Models\Student;
use Illuminate\Database\Seeder;

class AttachmentPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::all()->each(function ($student) {
            AttachmentPlace::factory()->create([
                'student_id' => $student->student_id
            ]);
        });
    }
}
