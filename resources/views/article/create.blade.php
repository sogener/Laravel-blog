@extends('layouts.app')

@section('header')
    <h1>Статьи</h1>
@endsection
@section('navigation')
    <li><a href="/articles_categories">Categories</a></li>
    <li><a href="/">Home</a></li>
@endsection
@section('errors')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
@section('content')

    {{ Form::model($article, ['url' => route('articles.store')]) }}
    {{ Form::label('name', 'Название') }}
    {{ Form::text('name') }}<br>
    {{ Form::label('body', 'Содержание') }}
    {{ Form::textarea('body') }}<br>
    {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection
