@extends('layouts.app')

@section('header')
    <h1>Single-item</h1>
@endsection
@section('navigation')
    <li><a href="/articles">Articles</a></li>
    <li><a href="/">Home</a></li>
@endsection
@section('content')
    <h2>{{$article->name}}</h2>
    {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
    {{-- Используется для очень длинных текстов, которые нужно сократить --}}
    <div>{{Str::limit($article->body, 200)}}</div>
    @section('comments')
        <h3>Комментарии к статье</h3>
        <div>
            <ol>
                @foreach($comments->get() as $comment)
                    <li>
                        <h4>{{$comment->name}}</h4>
                        <div>{{$comment->body}}</div>
                        <a href="/articles/{{$article->id}}/comments/{{$comment->id}}/edit">Редактировать комментарий</a>
                    </li>
                @endforeach
            </ol>
        </div>
    @endsection
@endsection
