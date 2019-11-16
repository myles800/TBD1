@section('footer')
    <div class="footer">
    <div class="row justify-content-center">
        @foreach($sponser as $item )
            @if($item->tier=="tier1")
                <img src="{{ asset('Images/'.$item->photo) }}" class="{{$item->tier}}">
            @endif
        @endforeach
    </div>
    <div class="row justify-content-center">
        @foreach($sponser as $item )
            @if($item->tier=="tier2")
                <img src="{{ asset('Images/'.$item->photo) }}" class="{{$item->tier}}">
            @endif
        @endforeach
    </div>
    <div class="row justify-content-center">
        @foreach($sponser as $item )
            @if($item->tier=="tier3")
                <img src="{{ asset('Images/'.$item->photo) }}" class="{{$item->tier}}">
            @endif
        @endforeach
    </div>
    </div>
@endsection
