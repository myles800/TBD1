@section('content')
<form>
    <div class="form-group">
        <label for="name">Naam</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="{{$user->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email adres</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$user->email}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
