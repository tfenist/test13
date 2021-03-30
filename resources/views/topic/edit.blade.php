@extends('layout')

@section('content')
    <div class="container">
        <h3>Edit</h3>

        {!! Form::open(['route' => ['topic.update']]) !!}
        {{Form::hidden('id', $topick->id)}}

        <div class="form-group">
            {{Form::label('name', 'name')}}
            {{Form::text('name',  $topick->name,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Сохранить изменения', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>


@endsection
