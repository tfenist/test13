<!--
<table >
    @foreach ($news as $one_news)
    <tr style="border: #1a202c 1px solid;" >
        <td>
{{$one_news->id}}
        </td>
        <td>
{{$one_news->topic}}
        </td>
        <td>
{{$one_news->body}}
        </td>
    </tr>
@endforeach
    </table>
    <a href="{{route('news.index')}}">sdfsdf</a>
-->
@extends('layout')

@section('content')
    <div class="container">
        <h3>My news</h3>
        <a href="{{ route('news.create') }}" class="btn btn-success">Create</a>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    @foreach ($news as $one_news)
                        <tbody>
                        <tr>
                            <td>
                                {{$one_news->id}}
                            </td>
                            <td>
                                {{$one_news->subject}}
                            </td>
                            <td>
                                <a href="{{route('news.destroy', ['id' => $one_news->id])}}" class="btn btn-danger"> Удалить</a>
                                <a class="btn btn-success" href="{{ route('news.edit' ,$one_news->id) }}">Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Выпадающая ссылка
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{ route('news.create') }}">Name</a>
                <a class="dropdown-item" href="{{ route('news.create') }}">Email</a>
                <a class="dropdown-item" href="{{ route('news.create') }}">Title</a>
            </div>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
    </div>

@endsection

