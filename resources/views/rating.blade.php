@extends('layouts.app')

@section('header')
    <h1>Rating</h1>
@endsection
@section('content')
    <div class="item">
        <?php ($allData->toArray());?>
        @foreach($allData as $value)
            <h4>Заголовок:<?=$value['name']?></h4>
            <div><?=($value['body']);?></div>
            <div><?=($value['views_count']);?></div>
            <div><?=($value['state']);?></div>
            <div><?=($value['likes_count']);?></div>
        @endforeach
    </div>
@endsection
