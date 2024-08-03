@extends('layouts.menu')
@section('content')
<div>
    @foreach($lists as $list)
      <div>
        <ul class="list-group">
          <div class="mx-auto" style="width: 1000px;"><li class="list-group-item"><a href="{{ route('record.show', $list->id) }}">{{ $list->title }}: {{ $list->weight_max}} кг</a></li></div>
        </ul>
      </div>
    @endforeach
</div>
@endsection