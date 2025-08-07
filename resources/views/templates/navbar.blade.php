<nav>
    <div class="container-nav">
        <img src="" alt="" class="nav-logo">
    </div>
    <div class="container-nav">
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('movies') }}">Filmes</a></li>
            <li><a href="{{ route('manage') }}">Gerenciar</a></li>
            <div class="profile">
                @if (Auth::check())
                    <img src="{{ Auth::user()->photo }}" alt="" class="profile-photo">
                    <!-- An arrow icon to expand the menu -->
                    <i class="icon"></i>
                    <div class="menu" hidden>
                        <ul>
                            <li><a href="{{ route('profile') }}">Perfil</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                @else
                    <li><a href="{{ route('login') }}">Entrar</a></li>
                    <li><a href="{{ route('register') }}">Registrar</a></li>
                @endif
            </div>
        </ul>
    </div>
</nav>