<?php

namespace Database\Seeders;

use App\Models\Coordinator;
use Illuminate\Database\Seeder;

class CoordinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coordinator::factory()
            ->count(2)
            ->create();
    }
}
