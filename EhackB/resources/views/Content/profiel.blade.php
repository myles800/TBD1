@extends('layouts.profiel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profiel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="POST" action="{{route('edit')}}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Email address</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="{{Auth::user()->name}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
