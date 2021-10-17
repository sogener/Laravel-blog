@extends('layouts.app')

@section('header')
    <h1>Editing comment</h1>
@endsection
@section('navigation')
    <li><a href="/articles">Articles</a></li>
    <li><a href="/">Home</a></li>
@endsection
@section('content')
    {{ Form::model($comment, ['url' => route('articles.comments.update', [$article, $comment]), 'method' => 'PUT']) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
    {{ Form::close() }}
@endsection
