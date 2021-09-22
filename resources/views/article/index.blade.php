@extends('layouts.app')

@section('header')
    <h1>Статьи</h1>
@endsection
@section('navigation')
    <li><a href="/articles_categories">Categories</a></li>
    <li><a href="/">Home</a></li>
@endsection
@section('content')
    @if(!$articles->isEmpty())
    <ol>
        @foreach ($articles as $article)
                <li><h2><a href="/articles/ <?=$article->id?> "> {{$article->name}} </a></h2></li>
                <div>{{Str::limit($article->body, 200)}}</div>
            {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
            {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        @endforeach
    </ol>
    @endif
@endsection
