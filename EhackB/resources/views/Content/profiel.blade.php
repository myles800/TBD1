@extends('layouts.profiel')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiel</div>

                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{route('changeProfiel')}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Email address</label>
                                <input name="name" type="text" class="form-control" id="name"
                                       placeholder="{{Auth::user()->name}}">
                            </div>
                            <button type="submit" class="btn btn-success">Change</button>
                        </form>
                        <form method="POST" action="{{route('changePassword')}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="currentPassword">Huidig passwoord</label>
                                <input name="currentPassword" type="password" class="form-control" id="currentPassword">
                            </div>
                            <div class="form-group">
                                <label for="newPassword">Nieuw passwoord</label>
                                <input name="newPassword" type="password" class="form-control" id="newPassword">
                            </div>
                            <div class="form-group">
                                <label for="repeatNewPassword">Herhaal nieuw passwoord</label>
                                <input name="repeatNewPassword" type="password" class="form-control"
                                       id="repeatNewPassword">
                            </div>

                            <button type="submit" class="btn btn-success">Change</button>
                        </form>
                        @if(Auth::user()->game_id!=null)
                            <h2>U neemt deel aan de game: </h2>
                            <div class="card " style="width: 18rem; margin-left:5%;margin-bottom:3%;">
                                <img src="{{ asset('storage/' . Auth::user()->game->photo) }}" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Naam: {{Auth::user()->game->name}}</h5>
                                    <p class="card-text">Datum: {{Auth::user()->game->date}}</p>
                                    <p class="card-text">Locatie: {{Auth::user()->game->location}}</p>
                                    <a href="{{route('game_details',['id' => Auth::user()->game->id])}}"
                                       class="btn btn-success">Details</a>
                                </div>
                            </div>
                        @endif
                        <h2>U neemt deel aan de sessies: </h2>
                        @foreach(Auth::user()->sessies as $item)
                            <div class="card " style="width: 18rem; float:left; margin-left:5%;margin-bottom:3%;">
                                <img src="{{ asset('storage/'.$item->photo) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tittel: {{$item->title}}</h5>
                                    <p class="card-text">Beschrijving: {{$item->desc1}}</p>
                                    <p class="card-text">Plaatsen: {{$item->places}}</p>
                                    <a href="{{route('sessie_details',['id' => $item->id])}}" class="btn btn-success">Details</a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
