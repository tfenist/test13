@extends('layout')

@section('content')
    <div class="container">
        <h3>Добавьте автора</h3>
        {!! Form::open(['route' => ['topics.store']]) !!}

        <div class="form-group">
            {{Form::label('title', 'title')}}
            {{Form::text('title', null, ['placeholder'=> 'Введите тему', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Добавить', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>

@endsection
