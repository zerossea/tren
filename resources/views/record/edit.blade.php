@extends('layouts.menu')
@section('content')
<div>
  <form action="{{ route('record.update', $list_s->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="form-group">
      <label for="title">
        <h4>Максимальный вес</h4>
      </label>
      <input type="text" name="weight_max" class="form-control w-25 mb-3" id="weight_max" placeholder="Максимальный вес" value="{{ $list_s->weight_max }}">
      @error("title")
      <p class="text-danger">{{ $message }}</p>
      @enderror()
    </div>
    <button type="submit" class="btn btn-primary position-sticky">Обновить</button>
  </form>
</div>
@endsection