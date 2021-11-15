<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -- SI la persona no esta logueada entrara como invitado-->
    @guest
    {{-- El navbar como tal viene por defecto, este mostrara la informacion
        de la persona logueada --}}
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        {{-- de lo contrario entara con su usuario y contraseña --}}
    @else
    {{-- Creacion de nueva entrada para la adicion de datos --}}
    <li class="nav-item">
        <a class="nav-link" href="{{url('/entries/create')}}">Nueva entrada</a>  <!--Se crea una Nueva Entrada -->
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/home')}}">Mis entradas</a>  <!--Se crea una Nueva Entrada -->
    </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   <!--Metodo POST para cerrar sesion -->
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
