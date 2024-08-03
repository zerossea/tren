@extends('layouts.menu')
@section('content')
<div><ul class="list-group">
  <div class="mx-auto" ><li class="list-group-item">{{ $list_s->weight_max }}</li></div>
</ul></div>
<ul class="nav nav-tabs  nav-fill bg-dark">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('record.index') }}">Вернуться</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="{{ route('record.edit', $list_s->id) }}">Обновить упражнение</a>
  </li>
</ul>
@endsection