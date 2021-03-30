@extends('layout')

@section('content')
    <div class="container">
        <h3>Добавьте автора</h3>
        {!! Form::open(['route' => ['topic.store']]) !!}

        <div class="form-group">
            {{Form::label('name', 'name')}}
            {{Form::text('name', null, ['placeholder'=> 'Введите тему', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Добавить', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>

@endsection
