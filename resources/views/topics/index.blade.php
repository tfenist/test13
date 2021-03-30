@extends('layout')

@section('content')

    <div class="container">
        <h3>Topic</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            @foreach ($topics as $topic)
                <tbody>
                <tr>
                    <td>
                        {{$topic->id}}
                    </td>
                    <td>
                        {{$topic->title}}
                    </td>
                    <td>
                        <a href="{{route('topics.destroy', ['id' => $topic->id])}}" class="btn btn-danger"> Удалить</a>
                        <a class="btn btn-warning" href="{{ route('topics.edit' ,$topic->id) }}">Edit</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        <a href="{{ route('topics.create') }}" class="btn btn-success">Create</a>
    </div>




@endsection
