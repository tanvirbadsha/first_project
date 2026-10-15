<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
\App\Models\Job::create([
            'title' => 'Frontend Developer',
            'salary' => '75000'
        ]);

        \App\Models\Job::create([
            'title' => 'Backend Developer',
            'salary' => '85000'
        ]);

        \App\Models\Job::create([
            'title' => 'Full Stack Engineer',
            'salary' => '95000'
        ]);

        \App\Models\Job::create([
            'title' => 'UI/UX Designer',
            'salary' => '70000'
        ]);
    }
}