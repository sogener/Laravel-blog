@extends('layouts.app')

@section('header')
    <h1>Статьи</h1>
@endsection
@section('navigation')
    <li><a href="/articles_categories">Categories</a></li>
    <li><a href="/">Home</a></li>
    <li><a href="/articles/create">Create new article</a></li>
@endsection
@section('content')
    {{ Form::open(['url' => route('articles.index'), 'method' => 'GET']) }}
    {{ Form::label('Название статьи') }}
    {{ Form::text('q') }}
    {{ Form::submit('Найти') }}
    {{ Form::close() }}
    @if(!$articles->isEmpty())
    <ol>
        @foreach ($articles as $article)
            <div>
                <li><h2><a href="/articles/{{$article->id}}"> {{$article->name}} </a></h2></li>
                <div class="articles__content">
                    <div>{{Str::limit($article->body, 200)}}</div>
                    <div class="content__actions">
                        <div><a href="/articles/{{$article->id}}/edit">Редактировать статью</a></div>
                        <a href="/articles/{{$article->id}}/delete" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить статью</a>
                    </div>
                </div>
            </div>
            {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
            {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        @endforeach
    </ol>
    @endif
@endsection
