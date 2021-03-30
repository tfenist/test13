@extends('layout')

@section('content')
    <div class="container">
        <h3>Create new</h3>
{{--            <form method="get" action="/news/create">--}}
{{--                <input type="text" name="title" id="title" placeholder="Введите заголовок" class="form-control"><br>--}}
{{--                <input type="text" name="message" id="message" placeholder="Введите сooбщение" class="form-control"><br>--}}
{{--                <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control"><br>--}}
{{--                <input type="text" name="email" id="email" placeholder="Введите email" class="form-control"><br>--}}
{{--            </form>--}}
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

