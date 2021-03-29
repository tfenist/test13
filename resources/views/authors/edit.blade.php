@extends('layout')

@section('content')
    <div class="container">
        <h3>Edit</h3>

        {!! Form::open(['route' => ['authors.update']]) !!}
        {{Form::hidden('id', $authors->id)}}

        <div class="form-group">
            {{Form::label('name', 'name')}}
            {{Form::text('name',  $authors->name,['placeholder'=> 'Введите заголовок', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Сохранить изменения', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>


@endsection
