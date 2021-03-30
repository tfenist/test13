@extends('layout')

@section('content')
    <div class="container">
        <h3>My news</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Theme</th>
                <th scope="col">Author</th>
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
                        {{$author->name}}
                    </td>
                    <td>
                        {{$one_news->email}}
                    </td>
                    <td>
                        {{$author->name}}
                    </td>
                    <td>
                        {{$topick->theme}}
                    </td>
                    <td>
                        <a href="{{route('authors.show', ['id' => $one_news->author->id])}}" class="btn btn-block btn-light">
                            {{$one_news->author->name}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('news.destroy', ['id' => $one_news->id])}}" class="btn btn-block btn-danger"> Удалить</a>
                        <br>
                        <a class="btn btn-warning" href="{{ route('news.edit' ,$one_news->id) }}">Редактировать</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>

    </div>

@endsection

