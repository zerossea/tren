<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Weight;

class WeightSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Weight::insert(
        [
            [
                "weight_max" => 1
            ]
        ]);
    }
}
