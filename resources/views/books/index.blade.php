@extends('layout')

@section('content')
    <div class="container">
        <h1>Library</h1>
        <div class="content">
            @foreach($books as $book)
                <p>
                    <a href="/{{$book->id}}">{{$book->title}}</a>
                </p>
            @endforeach
        </div>
    </div>
@stop