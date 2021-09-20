@extends('layouts.app')

@section('header')
    <h1>Статьи</h1>
@endsection
@section('articleCategories')
    <?php
    Route::get('/about', function () {
        return view('about', ['ourTeam' => Controllers\PageController::getAboutPage()]);
    });
    ?>
@endsection
@section('content')
    <h2>{{$article->name}}</h2>
    {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
    {{-- Используется для очень длинных текстов, которые нужно сократить --}}
    <div>{{Str::limit($article->body, 200)}}</div>
@endsection
