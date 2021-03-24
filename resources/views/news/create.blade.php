@extends('layout')

@section('content')
    <div class="container">
        <h3>Create new</h3>

        {!! Form::open(['route' => ['news.store']]) !!}
        <div class="form-group">
            {{Form::label('Заголовок', 'Заголовок')}}
            {{Form::text('subject', null, ['placeholder'=> 'Введите заголовок', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'Сообщение')}}
            {{Form::text('message', null,['placeholder'=> 'Введите сообщение', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('name', 'ФИО')}}
            {{Form::text('name', null, ['placeholder'=> 'Введите ФИО', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'email')}}
            {{Form::text('email', null, ['placeholder'=> 'Введите email', 'class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('author_id', 'Автор')}}
            {{Form::select('author_id', ['' => 'Выберите автора'] + $authors)}}
        </div>
        {{Form::submit('Добавить', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>


@endsection

