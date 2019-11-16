@extends('layouts.details')
@section('content')
    <form>
        <div class="form-group">
            <label for="title">title</label>
            <input name="tittle" type="text" class="form-control" id="title"  placeholder="{{$boek->tittle}}" >
        </div>
        <div class="form-group">
            <label for="desc">beshrijving</label>
            <input name="description" type="text" class="form-control" id="desc" placeholder="{{$boek->description}}" >
        </div>
        <div class="form-group">
            <label for="desc">beshrijving</label>
            <input name="description" type="text" class="form-control" id="desc" placeholder="{{$boek->description}}" >
        </div>
        <div class="form-group">
            <label for="desc">beshrijving</label>
            <input name="description" type="text" class="form-control" id="desc" placeholder="{{$boek->description}}" >
        </div>
    </form>
@endsection
