<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="container mt-4">
    <h1>О блоге</h1>
    <p>Эксперименты с Laravel</p>
    <div class="team" style="text-align: center">
        <h1 class="team__title">Our team!</h1>
        <div class="team__inside">
            @foreach($ourTeam as $member)
                <h2><?=$member['name']?></h2>
                <p><?=$member['position']?></p>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
