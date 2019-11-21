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
                    <div class="card-header">Edit Sessie</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('sessie_edit_post',['id'=>collect(request()->segments())->last()])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="title">Tittel</label>
                                <input name="title" type="text" class="form-control" id="title" placeholder="title">
                            </div>
                            <div class="form-group">
                                <label for="photo">Foto</label>
                                <input name="photo" type="file" class="form-control" id="photo" placeholder="file">
                            </div>
                            <div class="form-group">
                                <label for="desc1">Kleine beshrijving</label>
                                <input name="desc1" type="text" class="form-control" id="desc1"
                                       placeholder="beschrijving">
                            </div>
                            <div class="form-group">
                                <label for="desc2">Grote beshrijving</label>
                                <textarea name="desc2" type="text" class="form-control" id="desc2" rows="3"
                                          maxlength="255"
                                          placeholder="beschrijving"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="places">Plaatsen</label>
                                <input name="places" type="number" class="form-control" id="places" placeholder="30">
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
