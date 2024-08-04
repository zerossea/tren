@extends('layouts.menu')
@section('content')
<div>
  <form action="{{ route('contact.store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">
        <h4>Имя</h4>
      </label>
      <input value="{{ old('name') }}" type="text" name="name" class="form-control w-25 mb-3" id="name" placeholder="Имя">
      @error("name")
      <p class="text-danger">{{ $message }}</p>
      @enderror()
    </div>
    <div class="form-group">
      <label for="surname">
        <h4>Фамилия</h4>
      </label>
      <input value="{{ old('surname') }}" type="text" name="surname" class="form-control w-25 mb-3" id="surname" placeholder="Фамилия">
      @error("surname")
      <p class="text-danger">{{ $message }}</p>
      @enderror()
    </div>
    <div class="form-group">
      <label for="phone_number">
        <h4>Номер телефона</h4>
      </label>
      <input value="{{ old('phone_number') }}" type="text" name="phone_number" class="form-control w-25 mb-3" id="phone_number" placeholder="Номер телефона">
      @error("phone_number")
      <p class="text-danger">{{ $message }}</p>
      @enderror()
    </div>
    <div class="form-group">
      <label for="trener">Тренер</label>
      <select class="form-control w-25 mb-3" id="trener" name='trener_id'>
        @foreach($treners as $trener)
        <option value='{{ $trener->id }}'>{{ $trener->trener }}</option>
        @endforeach
      </select>
      <button type="submit" class="btn btn-primary position-sticky">Добавить</button>
  </form>
</div>
@endsection