@extends('layouts.menu')
@section('content')
<div><ul class="list-group">
  <div class="mx-auto" ><li class="list-group-item">{{ $list->id }}. {{ $list->title }}</li></div>
</ul></div>
<ul class="nav nav-tabs  nav-fill bg-dark">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('list.index') }}">Вернуться</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="{{ route('list.edit', $list->id) }}">Обновить упражнение</a>
  </li>
</ul>
  <form action="{{ route('list.delete', $list->id) }}" method="post">
    @csrf
    @method('delete')
   <input type='submit' value='Удалить' class='btn btn-danger'>
</form>
@endsection