<!doctype html>
@include('Partials.adminHeader')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
@yield('header')

<body>
<div class="row">
    <div class="col">

    @if($sessie!=null)
    <h1>Sessies</h1>

    @foreach($sessie as $item)
    <div class="card costumCard1" style="width: 18rem;float:left;">

        <img src="{{ asset('storage/'.$item->photo) }}" class="card-img-top" alt="..." style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">Tittel: {{$item->title}}</h5>
            <p class="card-text">Beschrijving: {{$item->desc1}}</p>
            <p class="card-text">Plaatsen: {{$item->places}}</p>
            <a href="#" class="btn btn-info">Details</a>
            <a href="{{route('sessie_edit',['id'=>$item->id])}}" class="btn btn-warning">edit</a>
            <a href="{{route('sessie_delete',['id'=>$item->id])}}" class="btn btn-danger">delete</a>
        </div>
    </div>

@endforeach
@endif
</div>
</div>
<div class="row">
<div class="col">
@if($game!=null)
<h1>Games</h1>

@foreach($game as $item)
    <div class="card costumCard1" style="width: 18rem;float:left;">
        <img src="{{ asset('storage/'.$item->photo) }}" class="card-img-top" alt="..."style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">Name: {{$item->name}}</h5>
            <p class="card-text">Datum: {{$item->date}}</p>
            <p class="card-text">Locatie: {{$item->location}}</p>
            <a href="#" class="btn btn-info">Details</a>
            <a href="{{route('game_edit',['id'=>$item->id])}}" class="btn btn-warning">edit</a>
            <a href="{{route('game_delete',['id'=>$item->id])}}" class="btn btn-danger">delete</a>
        </div>
    </div>


@endforeach
@endif
</div>
</div>
</body>
</html>
