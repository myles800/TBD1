@section('title','EhackB')

@section('header')
    <nav class="navbar navbar-expand-lg " style="background-color: black;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav col-2 mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}" style="color: greenyellow;">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}" style="color:greenyellow;">About</a>
                </li>

            </ul>
            <ul class="nav justify-content-center col-8 ">
                <h1>  <a class="nav-link" href="{{route('home')}}" style="color:white;">EhackB: 20/02/2020</a>
                    </h1>
            </ul>

            <ul class="nav justify-content-end col-2">

            @guest
                <div class="nav-item">
                    <a style="color:greenyellow;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>
                @if (Route::has('register'))
                    <div class="nav-item">
                        <a style="color:greenyellow;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endif
            @else
                <div class="nav-item dropdown">
                    <a style="color:greenyellow;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" style="background-color: black;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="{{route('profiel')}}" style="color:greenyellow;">Profiel</a>

                        <a style="color:greenyellow;" class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;color:greenyellow;">
                            @csrf
                        </form>

                    </div>
                </div>
            @endguest
            </ul>
        </div>
    </nav>
@endsection
