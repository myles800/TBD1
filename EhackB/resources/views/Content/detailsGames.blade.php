@extends('layouts.details')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header"><strong>Details:</strong> {{$game->name}} </div>
                    <div class="card-body">

                    <img src="{{asset("Images/".$game->photo)}}" class="card-img-top">

                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input disabled name="name" type="text" class="form-control" id="name" placeholder="{{$game->name}}">
                    </div>
                    <div class="form-group">
                        <label for="date">Datum</label>
                        <input disabled name="date" type="text" class="form-control" id="date" placeholder="{{$game->date}}">
                    </div>
                    <div class="form-group">
                        <label for="location">Locatie</label>
                        <input disabled name="location" type="text" class="form-control" id="location"
                               placeholder="{{$game->location}}">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

