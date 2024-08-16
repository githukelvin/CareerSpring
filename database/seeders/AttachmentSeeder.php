<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Student;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::all()->each(function ($student) {
            Attachment::factory()->create([
                'student_id' => $student->student_id
            ]);
        });
    }
}
