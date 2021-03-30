@extends('layout')

@section('content')
    <div class="container">
        <h3>Edit</h3>

        {!! Form::open(['route' => ['topics.update']]) !!}
        {{Form::hidden('id', $topics->id)}}

        <div class="form-group">
            {{Form::label('title', 'title')}}
            {{Form::text('title',  $topics->title,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Сохранить изменения', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>


@endsection
