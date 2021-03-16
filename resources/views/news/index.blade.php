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
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Message</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
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
                        {{$one_news->message}}
                    </td>
                    <td>
                        {{$one_news->email}}
                    </td>
                    <td>
                        <a href="{{route('news.destroy', ['id' => $one_news->id])}}" class="btn btn-danger"> Удалить</a>
                        <a class="btn btn-warning" href="{{ route('news.edit' ,$one_news->id) }}">Edit</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        <a href="{{ route('news.create') }}" class="btn btn-success">Create</a>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Кнопка выпадающего списка
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>

@endsection

