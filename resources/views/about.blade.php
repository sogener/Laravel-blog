@extends('layouts.app')

@section('header')
    <h1>О блоге</h1>
@endsection

@section('content')
    <p>Эксперименты с Laravel</p>
@endsection

<div class="team">
    <h1 class="team__title">Our team!</h1>
    <div class="team__inside">
        @foreach($ourTeam as $member)
            <h2><?=$member['name']?></h2>
            <p><?=$member['position']?></p>
        @endforeach
    </div>
    <div class="team">
        <h1 class="team__title">Our team!</h1>
        <div class="team__inside">
            @foreach($ourTeam as $member)
                <h2><?=$member['name']?></h2>
                <p><?=$member['position']?></p>
            @endforeach
        </div>
    </div>
</div>
