@extends('layouts.menu')
@section('content')
<div>
  <form action="{{ route('list.store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">
        <h4>Название упражнения</h4>
      </label>
      <input type="text" name="title" class="form-control w-25 mb-3" id="title" placeholder="Упражнение">
      @error("title")
      <p class="text-danger">{{ $message }}</p>
      @enderror()
    </div>
    <button type="submit" class="btn btn-primary position-sticky">Добавить</button>
  </form>
</div>
@endsection