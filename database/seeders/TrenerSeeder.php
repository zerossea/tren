<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Trener;

class TrenerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Trener::insert(
        [
            [
                "trener" => 'Nikolay'
            ],
            [
                "trener" => 'Nikita'
            ],
            [
                "trener" => 'Vladislav'
            ]
        ]);
    }
}
