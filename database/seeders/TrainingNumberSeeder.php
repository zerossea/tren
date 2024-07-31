<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\trainingNumber;

class TrainingNumberSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        TrainingNumber::insert(
        [
            [
                "training_number" => 1
            ],
            [
                "training_number" => 2
            ],
            [
                "training_number" => 3
            ],
            [
                "training_number" => 4
            ],
            [
                "training_number" => 5
            ],
            [
                "training_number" => 6
            ],
            [
                "training_number" => 7
            ],
            [
                "training_number" => 8
            ],
            [
                "training_number" => 9
            ],
            [
                "training_number" => 10
            ],
            [
                "training_number" => 11
            ],
            [
                "training_number" => 12
            ],
            [
                "training_number" => 13
            ],
            [
                "training_number" => 14
            ],
            [
                "training_number" => 15
            ],
            [
                "training_number" => 16
            ]
        ]);
    }
}
