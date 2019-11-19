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
                    <div class="card-header">Change sponser</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('sponser_edit_post')}}">
                            @method('PUT')
                            @csrf
                            @foreach($sponser as $item)
                                <div class="form-group">
                                    <label for="{{$item->name}}">{{$item->name}}</label>
                                    <select name="{{$item->name}}" class="form-control form-control-lg"
                                            id="{{$item->name}}">
                                        @if($item->tier=="tier1")
                                            <option value="tier1" selected>tier1</option>
                                            <option value="tier2">tier2</option>
                                            <option value="tier3">tier3</option>
                                        @endif
                                        @if($item->tier=="tier2")
                                            <option value="tier1">tier1</option>
                                            <option value="tier2" selected>tier2</option>
                                            <option value="tier3">tier3</option>
                                        @endif
                                        @if($item->tier=="tier3")
                                            <option value="tier1">tier1</option>
                                            <option value="tier2">tier2</option>
                                            <option value="tier3" selected>tier3</option>
                                        @endif
                                    </select>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
</body>
</html>
