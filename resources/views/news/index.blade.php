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
                        <td>Message</td>
                        <td>email</td>
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
                                <a class="btn btn-success" href="{{ route('news.edit' ,$one_news->id) }}">Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

@endsection

