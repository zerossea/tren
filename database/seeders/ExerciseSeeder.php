<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Exercise;


class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        Exercise::insert(
            [
                [
                    "title" => 'bench_press'
                ],
                [
                    "title" => 'leg_press'
                ],
                [
                    "title" => 'barbell_bench_press_on_an_inclined_bench'
                ],
                [
                    "title" => 'thrust_of_the_horizontal_block'
                ],
                [
                    "title" => 'vertical_block_thrust'
                ],
                [
                    "title" => 'hip_retraction_in_the_block'
                ],
                [
                    "title" => 'hip_reduction_in_the_block'
                ],
                [
                    "title" => 'pelvic_lift'
                ],
                [
                    "title" => 'twisting'
                ],
                [
                    "title" => 'bicycle'
                ],
                [
                    "title" => 'twisting+bicycle'
                ],
                [
                    "title" => 'shoulder_retraction_with_dumbbells'
                ],
                [
                    "title" => 'bending_the_lower_leg_while_lying_down'
                ],
                [
                    "title" => 'deadlift'
                ],
                [
                    "title" => 'slopes_with_weight'
                ],
                [
                    "title" => 'forearm_flexion_with_dumbbells_standing_hammer'
                ],
                [
                    "title" => 'holding_pancakes'
                ],
                [
                    "title" => 'barbell_bench_press'
                ],
                [
                    "title" => 'lifting_dumbbells_in_a_tilt_with_support_on_a_bench'
                ],
                [
                    "title" => 'extension_of_the_lower_leg_while_sitting'
                ],
                [
                    "title" => 'extension_of_the_lower_leg_while_sitting+high_chair'
                ],
                [
                    "title" => 'flexion_of_the_forearm_with_a_reverse_grip_in_a_crossover'
                ],
                [
                    "title" => 'pull-ups'
                ],
                [
                    "title" => 'pull-ups_blue'
                ],
                [
                    "title" => 'pull-ups_green'
                ],
                [
                    "title" => 'pull-ups_parallel'
                ],
                [
                    "title" => 'bulgarian_split_squats'
                ],
                [
                    "title" => 'split_squats'
                ],
                [
                    "title" => 'bending_the_hands_with_a_barbell'
                ],
                [
                    "title" => 'dumbbell_press_on_an_inclined_bench'
                ],
                [
                    "title" => 'extension_of_the_forearm_in_a_crossover'
                ],
                [
                    "title" => 'rising_to_the_calves_from_the_steppe'
                ],
                [
                    "title" => 'push-ups'
                ],
                [
                    "title" => 'dumbbell_bench_press'
                ],
                [
                    "title" => 'rod_pull_in_tilt'
                ],
                [
                    "title" => 'scars'
                ],
                [
                    "title" => 'extension_with_weight'
                ],
                [
                    "title" => 'push-ups_with_weight'
                ]
            ]);
    }
}
