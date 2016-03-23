@extends('layout')

@section('content')
    <div class="container">
        <h1>{{$book->title}}</h1>
        <div class="content">
            <p><b>Description:</b> {{$book->desc}}</p>
            <p><b>Edition:</b> {{$book->version}}</p>
            <p><b>Published:</b> {{$book->published}}</p>
            <a href="/">Back</a>
        </div>
    </div>
@stop