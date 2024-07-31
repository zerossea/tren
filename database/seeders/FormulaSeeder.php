<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Formula;

class FormulaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Formula::insert(
        [
            [
                "formula" => 'large_weights'
            ],
            [
                "formula" => 'Multi-repetition'
            ]
        ]);
    }
}
