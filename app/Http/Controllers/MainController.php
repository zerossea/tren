<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index(int $weight_s) 
    {
        return view('Main');
        {
            $title_id = readline();
            $approach = [];
            $repetition = [];
            $weight = [];
            $formula_id = readline();
            $data = readline();
            $training_number = readline();
            $weight_max = readline();
            if ($title_id == 1 && $formula_id == 1 && $training_number == 1)
            {
                $approach = [1, 2, 3, 4, 5, 6];
                $repetition = [6, 6, 6, 6, 6, 6];
                $weight = [$weight_max * 0.6, $weight_max * 0.65, $weight_max * 0.65, $weight_max * 0.65, $weight_max * 0.65, $weight_max * 0.65];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 2)
            {
                $approach = [1, 2, 3, 4, 5, 6];
                $repetition = [6, 6, 6, 6, 6, 6];
                $weight = [$weight_max * 0.6, $weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.75];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 3)
            {
                $approach = [1, 2, 3, 4, 5, 6];
                $repetition = [6, 6, 6, 6, 6, 6];
                $weight = [$weight_max * 0.6, $weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.75];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 4)
            {
                $approach = [1, 2, 3, 4, 5];
                $repetition = [6, 6, 6, 6, 6];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.75];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 5)
            {
                $approach = [1, 2, 3, 4, 5, 6, 7];
                $repetition = [6, 6, 6, 6, 4, 4, 4];
                $weight = [$weight_max * 0.6, $weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.8, $weight_max * 0.8];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
                echo $title_id . ' ' . $approach[6] . ' ' . $repetition[6] . ' ' . $weight[6] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 6)
            {
                $approach = [1, 2, 3, 4, 5];
                $repetition = [6, 6, 6, 6, 6];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.75];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 7)
            {
                $approach = [1, 2, 3, 4, 5, 6];
                $repetition = [6, 6, 6, 4, 4, 4];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.8, $weight_max * 0.8];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 8)
            {
                $approach = [1, 2, 3, 4, 5, 6, 7];
                $repetition = [6, 6, 6, 6, 6, 6, 4];
                $weight = [$weight_max * 0.6, $weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.8];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
                echo $title_id . ' ' . $approach[6] . ' ' . $repetition[6] . ' ' . $weight[6] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 9)
            {
                $approach = [1, 2, 3, 4, 5, 6, 7];
                $repetition = [6, 6, 6, 4, 4, 3, 3];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.8, $weight_max * 0.85, $weight_max * 0.85];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
                echo $title_id . ' ' . $approach[6] . ' ' . $repetition[6] . ' ' . $weight[6] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 10)
            {
                $approach = [1, 2, 3, 4, 5];
                $repetition = [6, 6, 6, 6, 4];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.8];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 11)
            {
                $approach = [1, 2, 3, 4, 5, 6, 7];
                $repetition = [6, 6, 6, 4, 4, 3, 3];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.8, $weight_max * 0.85, $weight_max * 0.85];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
                echo $title_id . ' ' . $approach[6] . ' ' . $repetition[6] . ' ' . $weight[6] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 12)
            {
                $approach = [1, 2, 3, 4, 5, 6];
                $repetition = [6, 6, 6, 6, 4, 4];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.8];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 13)
            {
                $approach = [1, 2, 3, 4, 5, 6, 7, 8];
                $repetition = [6, 6, 6, 4, 4, 3, 3, 2];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.8, $weight_max * 0.85, $weight_max * 0.85, $weight_max * 0.9];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
                echo $title_id . ' ' . $approach[6] . ' ' . $repetition[6] . ' ' . $weight[6] . "\n";
                echo $title_id . ' ' . $approach[7] . ' ' . $repetition[7] . ' ' . $weight[7] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 14)
            {
                $approach = [1, 2, 3, 4, 5, 6, 7];
                $repetition = [6, 6, 6, 4, 3, 3, 3];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.85, $weight_max * 0.85, $weight_max * 0.85];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
                echo $title_id . ' ' . $approach[6] . ' ' . $repetition[6] . ' ' . $weight[6] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 15)
            {
                $approach = [1, 2, 3, 4, 5, 6, 7];
                $repetition = [6, 6, 6, 4, 3, 3, 2];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.85, $weight_max * 0.85, $weight_max * 0.9];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
                echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
                echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
                echo $title_id . ' ' . $approach[6] . ' ' . $repetition[6] . ' ' . $weight[6] . "\n";
                echo $title_id . ' ' . $approach[7] . ' ' . $repetition[7] . ' ' . $weight[7] . "\n";
            }
            elseif ($title_id == 1 && $formula_id == 1 && $training_number == 16)
            {
                $approach = [1, 2, 3, 4];
                $repetition = [3, 3, 3, 3];
                $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.7, $weight_max * 0.75];
                echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
                echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
                echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
                echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
            }
        }
    }
}
