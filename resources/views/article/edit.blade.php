@extends('layouts.app')

@section('header')
    <h1>Article-Categories</h1>
@endsection
@section('navigation')
    <li><a href="/articles">Articles</a></li>
    <li><a href="/">Home</a></li>
@endsection
@section('content')
    {{ Form::model($article, ['url' => route('articles.update', $article), 'method' => 'POST']) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
    {{ Form::close() }}
@endsection
