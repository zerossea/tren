@extends('layouts.menu')
@section('content')
<div>
  <form action="{{ route('list.update', $list->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="form-group">
      <label for="title">
        <h4>Название упражнения</h4>
      </label>
      <input type="text" name="title" class="form-control w-25 mb-3" id="title" placeholder="Упражнение" value="{{ $list->title }}">
      @error("title")
      <p class="text-danger">{{ $message }}</p>
      @enderror()
    </div>
    <button type="submit" class="btn btn-primary position-sticky">Обновить</button>
  </form>
</div>
@endsection