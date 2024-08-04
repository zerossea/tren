<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Exercise;
use \App\Models\CreateProgram;
use \App\Models\Program;
use \App\Models\Formula;
use \App\Models\TrainingNumber;
use \App\Models\Weight;
use \App\Http\Requests\CreateProgramRequest;
use \App\Http\Requests\ProgramRequest;

class ProgramController extends Controller
{
    public function index()
    {
        $training_numbers = TrainingNumber::all();
        $formulas = Formula::all();
        $programs = Exercise::all();
        $weights = Weight::all();
        return view('program', compact('programs', 'formulas', 'training_numbers', 'weights'));
    }

    public function store(CreateProgramRequest $request)
    {
        $data = $request->validated();
        CreateProgram::create($data);
        $create_program = CreateProgram::latest()->first();
        if ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 1) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 6, 6, 6];
            $weight = [$create_program->weight_max * 0.6, $create_program->weight_max * 0.65, $create_program->weight_max * 0.65, $create_program->weight_max * 0.65, $create_program->weight_max * 0.65, $create_program->weight_max * 0.65];
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '1',
                'formula_id'  => '1',
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '1',
                'formula_id'  => '1',
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '1',
                'formula_id'  => '1',
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '1',
                'formula_id'  => '1',
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '1',
                'formula_id'  => '1',
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '1',
                'formula_id'  => '1',
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
            $table_programs = Program::all();
            return redirect()->route('main.index');
            dd($data_program);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 2) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 6, 6, 6];
            $weight = [$create_program->weight_max * 0.6, $create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75];
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '2',
                'formula_id'  => '1',
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '2',
                'formula_id'  => '1',
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '2',
                'formula_id'  => '1',
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '2',
                'formula_id'  => '1',
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '2',
                'formula_id'  => '1',
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => '1',
                'training_number_id' => '2',
                'formula_id'  => '1',
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 3) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 6, 6, 6];
            $weight = [$weight_max * 0.6, $weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.75];
            echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
            echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
            echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
            echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
            echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
            echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 4) {
            $approach = [1, 2, 3, 4, 5];
            $repetition = [6, 6, 6, 6, 6];
            $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.75];
            echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
            echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
            echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
            echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
            echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
            echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 5) {
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
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 6) {
            $approach = [1, 2, 3, 4, 5];
            $repetition = [6, 6, 6, 6, 6];
            $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.75];
            echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
            echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
            echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
            echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
            echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 7) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 4, 4, 4];
            $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.8, $weight_max * 0.8];
            echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
            echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
            echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
            echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
            echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
            echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 8) {
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
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 9) {
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
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 10) {
            $approach = [1, 2, 3, 4, 5];
            $repetition = [6, 6, 6, 6, 4];
            $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.8];
            echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
            echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
            echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
            echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
            echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 11) {
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
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 12) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 6, 4, 4];
            $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.75, $weight_max * 0.75, $weight_max * 0.8, $weight_max * 0.8];
            echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
            echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
            echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
            echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
            echo $title_id . ' ' . $approach[4] . ' ' . $repetition[4] . ' ' . $weight[4] . "\n";
            echo $title_id . ' ' . $approach[5] . ' ' . $repetition[5] . ' ' . $weight[5] . "\n";
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 13) {
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
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 14) {
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
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 15) {
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
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 16) {
            $approach = [1, 2, 3, 4];
            $repetition = [3, 3, 3, 3];
            $weight = [$weight_max * 0.65, $weight_max * 0.7, $weight_max * 0.7, $weight_max * 0.75];
            echo $title_id . ' ' . $approach[0] . ' ' . $repetition[0] . ' ' . $weight[0] . "\n";
            echo $title_id . ' ' . $approach[1] . ' ' . $repetition[1] . ' ' . $weight[1] . "\n";
            echo $title_id . ' ' . $approach[2] . ' ' . $repetition[2] . ' ' . $weight[2] . "\n";
            echo $title_id . ' ' . $approach[3] . ' ' . $repetition[3] . ' ' . $weight[3] . "\n";
        }
        return redirect()->route('program.index');
    }
}
