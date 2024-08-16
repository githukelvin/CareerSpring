<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            StudentSeeder::class,
            DirectorSeeder::class,
            CoordinatorSeeder::class,
            LecturerSeeder::class,
            TrainingInstitutionSeeder::class,
            AttachmentPlaceSeeder::class,
            AssessmentSeeder::class,
//            WeeklyLogSeeder::class,
            AttachmentSeeder::class,
        ]);
    }
}
