@section('title','EhackB Admin')

@section('header')
    <nav class="navbar navbar-expand-lg " style="background-color: white;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav col-2 mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin_home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sessie_create')}}">Sessie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('game_create')}}">Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sponser')}}">Sponser</a>
                </li>

            </ul>
            <ul class="nav justify-content-center col-8 ">
                <h1 >EhackB</h1>
            </ul>
            <ul class="nav justify-content-end col-2">
            @guest
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('admin_login') }}">{{ __('Login') }}</a>
                </div>
                @if (Route::has('register'))
                    <div class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endif
            @else
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="{{route('admin')}}">Profiel</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </div>
            @endguest
            </ul>
        </div>
    </nav>
@endsection
