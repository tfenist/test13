@extends('layout')

@section('content')
    <div class="container">
        <h3>Edit</h3>

        {!! Form::open(['route' => ['news.update']]) !!}
        {{Form::hidden('id', $news->id)}}
        <div class="form-group">
            {{Form::label('subject', 'subject')}}
            {{Form::text('subject', $news->subject,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'message')}}
            {{Form::text('message', $news->message,['placeholder'=> 'Джек лох', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('name', 'name')}}
            {{Form::text('name',  $news->name,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'email')}}
            {{Form::text('email', $news->email,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>
        {{Form::submit('Сохранить изменения', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>


@endsection
