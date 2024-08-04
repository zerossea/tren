@extends('layouts.menu')
@section('content')
</ul>
<div>
  @foreach($list as $lists)
  <div>
    <ul class="list-group">
      <div class="mx-auto" style="width: 1000px;">
        <li class="list-group-item"><a href="{{ route('list.show', $lists->id) }}">{{ $lists->id }}. {{ $lists->title }}</a></li>
      </div>
    </ul>
  </div>
  @endforeach
</div>
<ul class="nav nav-tabs  nav-fill bg-dark">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('list/create.create') }}">Добавить упражнение</a>
  </li>
</ul>
@endsection