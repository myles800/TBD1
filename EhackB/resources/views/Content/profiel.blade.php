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
                            <button type="submit" class="btn btn-primary">Change</button>
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

                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                        @if(Auth::user()->game->name!=null)
                            <h1>U neemt deel aan de game: {{Auth::user()->game->name}}</h1>
                        @endif
                        @else
                            <h1>U neemt niet deel aan een game</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
