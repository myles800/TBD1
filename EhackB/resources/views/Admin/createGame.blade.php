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
@include("partials.errorPartial")

@yield('header')

<body>
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Game</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('game_create_post')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Naam</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Naam">
                            </div>
                            <div class="form-group">
                                <label for="photo">Foto</label>
                                <input name="photo" type="file" class="form-control" id="desc" placeholder="Photo.png">
                            </div>
                            <div class="form-group">
                                <label for="date">Datum</label>
                                <input name="date" type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="location">Locatie</label>
                                <input name="location" type="text" class="form-control" id="location" placeholder="Beersel">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
</body>
</html>
