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
            @foreach ($author as $allnews)
                <tbody>
                <tr>
                    <td>
                        {{$allnews->id}}
                    </td>
                    <td>
                        {{$allnews->subject}}
                    </td>
                    <td>
                        {{$allnews->message}}
                    </td>
                    <td>
                        {{$allnews->name}}
                    </td>
                    <td>
                        {{$allnews->email}}
                    </td>
                    <td>
                            {{$allnews->author->name}}
                    </td>
                    <td>
                        <a href="{{route('authors.destroy', ['id' => $allnews->id])}}" class="btn btn-danger"> Удалить</a>
                        <a class="btn btn-warning" href="{{ route('authors.edit' ,$allnews->id) }}">Edit</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        {{$author->links()}}

    </div>

@endsection
