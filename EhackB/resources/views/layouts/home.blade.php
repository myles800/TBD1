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

<body class="body">
    <main class="py-4">
        <div class="row">

            <div class="col-3">

            </div>
            <div class="col-6">
                <img src="{{asset('Images/EhackB.png')}}" width="100%" >
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
                <h1 style="color:white;">Sessies:</h1>
                @foreach($sessie as $item)
                    @if($item->places>0)
                    <div class="card costumCard" style="width: 18rem;">
                        <img src="{{asset("storage/".$item->photo)}}" class="card-img-top" alt="..."style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Tittel: {{$item->title}}</h5>
                            <p class="card-text">Beschrijving: {{$item->desc1}}</p>
                            <p class="card-text">Plaatsen: {{$item->places}}</p>
                            <a href="{{route('sessie_details',['id' => $item->id])}}" class="btn btn-success">Details</a>
                            <a href="{{route('sessie_add',['id' => $item->id])}}" class="btn btn-success">Add</a>
                        </div>
                    </div>
                    @endif


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
                <h1 style="color:white;">Games:</h1>
                @foreach($game as $item)
                    <div class="card costumCard" style="width: 18rem;">
                        <img src="{{asset("storage/".$item->photo)}}" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Naam: {{$item->name}}</h5>
                            <p class="card-text">Datum: {{$item->date}}</p>
                            <p class="card-text">Locatie: {{$item->location}}</p>
                            <a href="{{route('game_details',['id' => $item->id])}}" class="btn btn-success">Details</a>
                            <a href="{{route('game_add',['id' => $item->id])}}" class="btn btn-success">Add</a>

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
                <h1 style="color:white;">Vervoers info:</h1>
                <div style="background-color: greenyellow;">
                    <div class="col-4" style="background-color: greenyellow; float:left; padding-top: 5%;">
                        <img src="{{asset('Images/car.png')}}" width="100%"/>
                        <p> <strong>EhackB bevind zich op 7 km van Jette!!</strong></p>
                        <br/>

                    </div>
                    <div class="col-4" style="background-color: greenyellow;float:left;padding-top: 5%;">
                        <img src="{{asset('Images/cycle.png')}}" width="100%"/>
                        <p><strong>EhackB bevind zich op 40 minuten van Jette met de fiets!!</strong></p>
                        <br/>

                    </div>
                    <div class="col-4"  style="background-color: greenyellow;float:left;padding-top: 5%;">
                        <img src="{{asset('Images/train.jpg')}}" width="100%"/>
                        <p><strong>EhackB bevind zich op 30 minuten van Jette met openbaar vervoer!!</strong></p>

                    </div>

                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">

            <div class="col-3">

            </div>
            <div class="col-6">
                <h1 style="color:white;">Locatie:</h1>

                <iframe width="750" height="450" frameborder="0" style="border:0"
                        src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=nijverheidskaai%20170%20belgie+(Erasmus)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" allowfullscreen></iframe>

            </div>
            <div class="col-3">
            </div>
        </div>
    </main>
</div>
</body>
@yield('footer')
</html>
