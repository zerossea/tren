@extends('layouts.menu')
@section('content')
<form action="{{ route('program.store') }}" method="post">
    @csrf
    <div class="form-group">
    <label for="title">Упражнение</label>
    <select class="form-control w-25 mb-3" id="title" name='title_id'>
      @foreach($programs as $title)
      <option value='{{ $title->id }}'>{{ $title->title }}</option>
      @endforeach
    </select>
    <div class="form-group">
    <label for="formula">Формула</label>
    <select class="form-control w-25 mb-3" id="formula" name='formula_id'>
      @foreach($formulas as $formula)
      <option value='{{ $formula->id }}'>{{ $formula->formula }}</option>
      @endforeach
    </select>
    <div class="form-group">
    <label for="training_number">Номер упражнения</label>
    <select class="form-control w-25 mb-3" id="training_number" name='training_number_id'>
      @foreach($training_numbers as $training_number)
      <option value='{{ $training_number->id }}'>{{ $training_number->training_number }}</option>
      @endforeach
    </select>
    <label for="weight_max"><h4>Максимальный вес</h4></label>
    <input value="{{ old('weight_max') }}" type="text" name="weight_max" class="form-control w-25 mb-3" id="weight_max" placeholder="МП">
    @error("weight_max")
    <p class="text-danger">{{ $message }}</p>
    @enderror()
  </div>
  <button type="submit" class="btn btn-primary position-sticky">Добавить</button>
</form>
</div>
if ($title_id == 1 && $formula_id == 1 && $training_number_id == 1)
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

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Упражнение</th>
      <th scope="col">Подход</th>
      <th scope="col">Повторений</th>
      <th scope="col">Вес</th>
      <th scope="col">Выполнение</th>
      <th scope="col">Номер упражнения</th>
      <th scope="col">Сделал повторений</th>
      <th scope="col">Сделал вес</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
@endsection