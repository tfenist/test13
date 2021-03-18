@extends('layout')

@section('content')
    <div class="container">
        <h3>Create new</h3>

        {!! Form::open(['route' => ['news.store']]) !!}
        <div class="form-group">
            {{Form::label('subject', 'subject')}}
            {{Form::text('subject', null)}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'message')}}
            {{Form::text('message', null)}}
        </div>

        <div class="form-group">
            {{Form::label('name', 'name')}}
            {{Form::text('name', null)}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'email')}}
            {{Form::text('email', null)}}
        </div>

        <div class="form-group">
            {{Form::label('author_id', 'Автор')}}
            {{Form::select('author_id', ['' => 'Выберите автора'] + $authors)}}
        </div>
        {{Form::submit('Добавить' )}}
        {!! Form::close() !!}
    </div>


@endsection

