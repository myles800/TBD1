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
        <div class="card costumCard" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card costumCard" style="width: 18rem;" >
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body ">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-3">
    </div>
</div>
</body>
@yield('footer')
</html>
