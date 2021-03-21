@extends('layout')

@section('content')

    <div class="container">
        <h3>Authors</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            @foreach ($authors as $author)
                <tbody>
                <tr>
                    <td>
                        {{$author->id}}
                    </td>
                    <td>
                        {{$author->name}}
                    </td>
                    <td>
                        <a href="{{route('authors.destroy', ['id' => $author->id])}}" class="btn btn-danger"> Удалить</a>
                        <a class="btn btn-warning" href="{{ route('authors.edit' ,$author->id) }}">Edit</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        <a href="{{ route('authors.create') }}" class="btn btn-success">Create</a>
    </div>




@endsection
