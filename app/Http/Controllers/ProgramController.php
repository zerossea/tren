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
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id'  => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id, 
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 2) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 6, 6, 6];
            $weight = [$create_program->weight_max * 0.6, $create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 3) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 6, 6, 6];
            $weight = [$create_program->weight_max * 0.6, $create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 4) {
            $approach = [1, 2, 3, 4, 5];
            $repetition = [6, 6, 6, 6, 6];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 5) {
            $approach = [1, 2, 3, 4, 5, 6, 7];
            $repetition = [6, 6, 6, 6, 4, 4, 4];
            $weight = [$create_program->weight_max * 0.6, $create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8, $create_program->weight_max * 0.8, $create_program->weight_max * 0.8];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[6],
                'repetition' => $repetition[6],
                'weight' => $weight[6]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 6) {
            $approach = [1, 2, 3, 4, 5];
            $repetition = [6, 6, 6, 6, 6];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 7) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 4, 4, 4];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8, $create_program->weight_max * 0.8, $create_program->weight_max * 0.8];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 8) {
            $approach = [1, 2, 3, 4, 5, 6, 7];
            $repetition = [6, 6, 6, 6, 6, 6, 4];
            $weight = [$create_program->weight_max * 0.6, $create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
               'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[6],
                'repetition' => $repetition[6],
                'weight' => $weight[6]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 9) {
            $approach = [1, 2, 3, 4, 5, 6, 7];
            $repetition = [6, 6, 6, 4, 4, 3, 3];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8, $create_program->weight_max * 0.8, $create_program->weight_max * 0.85, $create_program->weight_max * 0.85];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[6],
                'repetition' => $repetition[6],
                'weight' => $weight[6]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 10) {
            $approach = [1, 2, 3, 4, 5];
            $repetition = [6, 6, 6, 6, 4];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 11) {
            $approach = [1, 2, 3, 4, 5, 6, 7];
            $repetition = [6, 6, 6, 4, 4, 3, 3];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8, $create_program->weight_max * 0.8, $create_program->weight_max * 0.85, $create_program->weight_max * 0.85];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[6],
                'repetition' => $repetition[6],
                'weight' => $weight[6]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 12) {
            $approach = [1, 2, 3, 4, 5, 6];
            $repetition = [6, 6, 6, 6, 4, 4];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8, $create_program->weight_max * 0.8];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 13) {
            $approach = [1, 2, 3, 4, 5, 6, 7, 8];
            $repetition = [6, 6, 6, 4, 4, 3, 3, 2];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8, $create_program->weight_max * 0.8, $create_program->weight_max * 0.85, $create_program->weight_max * 0.85, $create_program->weight_max * 0.9];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[6],
                'repetition' => $repetition[6],
                'weight' => $weight[6]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[7],
                'repetition' => $repetition[7],
                'weight' => $weight[7]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 14) {
            $approach = [1, 2, 3, 4, 5, 6, 7];
            $repetition = [6, 6, 6, 4, 3, 3, 3];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8, $create_program->weight_max * 0.85, $create_program->weight_max * 0.85, $create_program->weight_max * 0.85];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[6],
                'repetition' => $repetition[6],
                'weight' => $weight[6]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 15) {
            $approach = [1, 2, 3, 4, 5, 6, 7];
            $repetition = [6, 6, 6, 4, 3, 3, 2];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75, $create_program->weight_max * 0.8, $create_program->weight_max * 0.85, $create_program->weight_max * 0.85, $create_program->weight_max * 0.9];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[4],
                'repetition' => $repetition[4],
                'weight' => $weight[4]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[5],
                'repetition' => $repetition[5],
                'weight' => $weight[5]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[6],
                'repetition' => $repetition[6],
                'weight' => $weight[6]
            ]);
        } elseif ($create_program->title_id == 1 && $create_program->formula_id == 1 && $create_program->training_number_id == 16) {
            $approach = [1, 2, 3, 4];
            $repetition = [3, 3, 3, 3];
            $weight = [$create_program->weight_max * 0.65, $create_program->weight_max * 0.7, $create_program->weight_max * 0.7, $create_program->weight_max * 0.75];
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[0],
                'repetition' => $repetition[0],
                'weight' => $weight[0]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[1],
                'repetition' => $repetition[1],
                'weight' => $weight[1]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[2],
                'repetition' => $repetition[2],
                'weight' => $weight[2]
            ]);
            $data_program = Program::create([
                'title_id' => $create_program->title_id,
                'training_number_id' => $create_program->training_number_id,
                'formula_id' => $create_program->formula_id,
                'approach' => $approach[3],
                'repetition' => $repetition[3],
                'weight' => $weight[3]
            ]);
        }
        return redirect()->route('main.index');
    }
}
