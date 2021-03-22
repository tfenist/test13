@extends('layout')

@section('content')
    <div class="container">
        <h3>Author</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Message</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Author</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            @foreach ($author->allnews as $one_news)
                <tbody>
                <tr>
                    <td>
                        {{$author->id}}
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
                        <a href="{{route('news.destroy', ['id' => $one_news->id])}}" class="btn btn-danger"> Удалить</a>
                        <a class="btn btn-warning" href="{{ route('news.edit' , ['id' => $one_news->id]) }}">Edit</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
{{--        {{$author->links()}}--}}

    </div>

@endsection
