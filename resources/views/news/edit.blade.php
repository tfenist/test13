@extends('layout')

@section('content')
    <div class="container">
        <h3>Edit</h3>

        {!! Form::open(['route' => ['news.store', ['id', $news->id]]]) !!}
        {{Form::hidden('id', $news->id)}}
        <div class="form-group">
            {{Form::label('subject', 'subject')}}
            {{Form::text('subject', $news->subject)}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'message')}}
            {{Form::text('message', $news->message)}}
        </div>

        <div class="form-group">
            {{Form::label('name', 'name')}}
            {{Form::text('name',  $news->name)}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'email')}}
            {{Form::text('email', $news->email)}}
        </div>
        {{Form::submit('Сохранить изменения')}}
        {!! Form::close() !!}
    </div>

@endsection
