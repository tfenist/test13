@extends('layout')

@section('content')
        <div class="container">
            <h3>Добавьте автора</h3>



            {!! Form::open(['route' => ['authors.store']]) !!}

            <div class="form-group">
                {{Form::label('email', 'email')}}
                {{Form::text('name', null, ['placeholder'=> 'Введите ФИО', 'class' => 'form-control'])}}
            </div>

            {{Form::submit('Добавить', ['class' => 'btn-success'])}}
            {!! Form::close() !!}
        </div>

@endsection
