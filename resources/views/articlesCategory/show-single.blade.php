@extends('layouts.app')

@section('header')
    <h1>Article-Categories</h1>
@endsection
@section('navigation')
    <li><a href="/articles">Articles</a></li>
    <li><a href="/">Home</a></li>
@endsection
@section('content')
    @foreach($articles as $article)
        <h2>{{$article->name}}</h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->desription, 200)}}</div>
        <div>{{$article->state}}</div>
        <div>{{$article->created_at}}</div>
        <div>{{$article->updated_at}}</div>
    @endforeach
@endsection
