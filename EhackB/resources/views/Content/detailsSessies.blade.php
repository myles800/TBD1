@extends('layouts.details')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header"><strong>Details:</strong> {{$sessie->title}} </div>
                    <div class="card-body">

                        <img src="{{asset("storage/".$sessie->photo)}}" class="card-img-top">

                        <div class="form-group">
                            <label for="title">Tittel</label>
                            <input disabled name="title" type="text" class="form-control" id="title" placeholder="{{$sessie->title}} ">
                        </div>

                        <div class="form-group">
                            <label for="desc1">Kleine beshrijving</label>
                            <input disabled name="desc1" type="text" class="form-control" id="{{$sessie->desc1}} "
                                   placeholder="beschrijving">
                        </div>
                        <div class="form-group">
                            <label for="desc2">Grote beshrijving</label>
                            <textarea disabled name="desc2" type="text" class="form-control" id="desc2" rows="3"
                                      maxlength="255"
                                      placeholder="{{$sessie->desc2}} "></textarea>
                        </div>
                        <div class="form-group">
                            <label for="places">Plaatsen</label>
                            <input disabled name="places" type="number" class="form-control" id="places" placeholder="{{$sessie->places}} ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

