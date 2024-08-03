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
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Упражнение</th>
      <th scope="col">Подход</th>
      <th scope="col">Повторений</th>
      <th scope="col">Вес</th>
      <th scope="col">Номер упражнения</th>
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