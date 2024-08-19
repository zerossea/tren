@extends('layouts.menu')
@section('content')
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
        @foreach($table_programs as $table_program)
        <tr>
            <td>{{ $table_program->id}}</td>
            <td>{{ $table_program->title}}</td>
            <td>{{ $table_program->approach}}</td>
            <td>{{ $table_program->repetition}}</td>
            <td>{{ $table_program->weight}}</td>
            <td>{{ $table_program->training_number_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection