<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Exercise;
use \App\Models\Trener;
use \App\Models\Weight;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            $this->call([
                ExerciseSeeder::class,
                TrenerSeeder::class,
                FormulaSeeder::class,
                TrainingNumberSeeder::class,
                WeightSeeder::class,
            ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
