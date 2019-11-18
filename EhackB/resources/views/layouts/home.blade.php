<!doctype html>
@include('Partials.footer')
@include('Partials.header')
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
<div id="app">
    <main class="py-4">
        <div class="row">

            <div class="col-3">

            </div>
            <div class="col-6">
                <img src="{{asset('Images/EhackB.png')}}" width="100%">
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">

            <div class="col-3">

            </div>
            <div class="col-6">
                <br>
                <br>
                <br>
                <h1>Sessies:</h1>
                @foreach($sessie as $item)
                    <div class="card costumCard" style="width: 18rem;">
                        <img src="{{asset("Images/".$item->photo)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tittel: {{$item->title}}</h5>
                            <p class="card-text">Beschrijving: {{$item->desc1}}</p>
                            <p class="card-text">Plaatsen: {{$item->places}}</p>
                            <a href="{{route('sessie_details',['id' => $item->id])}}" class="btn btn-info">Details</a>
                        </div>
                    </div>


                @endforeach
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">

            <div class="col-3">

            </div>
            <div class="col-6">
                <br>
                <br>
                <br>
                <h1>Games:</h1>
                @foreach($game as $item)
                    <div class="card costumCard" style="width: 18rem;">
                        <img src="{{asset("Images/".$item->photo)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Naam: {{$item->name}}</h5>
                            <p class="card-text">Datum: {{$item->date}}</p>
                            <p class="card-text">Locatie: {{$item->location}}</p>
                            <a href="{{route('game_details',['id' => $item->id])}}" class="btn btn-info">Details</a>
                        </div>
                    </div>


                @endforeach
            </div>
            <div class="col-3">
            </div>
        </div>
    </main>
</div>

</body>
@yield('footer')
</html>
