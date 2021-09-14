@extends('layouts.app')

@section('header')
    <h1>Статьи</h1>
@endsection
@section('content')
    @foreach($allPosts as $aPost)
        <h4><?=$aPost['name']?></h4>
        <p><?=($aPost['body']);?></p>
        <p><?=($aPost['views_count']);?></p>
    @endforeach
@endsection
