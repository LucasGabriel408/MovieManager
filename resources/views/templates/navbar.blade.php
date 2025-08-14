<nav class="nav-bar">
    <div class="container-nav">
        <img src="/images/logo.jpg" alt="" class="nav-logo">
    </div>
    <div class="container-nav">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('movies') }}">Filmes</a>
        <a href="{{ route('manage') }}">Gerenciar</a>
        <div class="profile">
            @if (Auth::check())
                <img src="{{ Auth::user()->photo }}" alt="" class="profile-photo">
                <!-- An arrow icon to expand the menu -->
                <i class="icon"></i>
                <div class="menu" hidden>
                    <a href="{{ route('profile') }}">Perfil</a>
                    <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}">Entrar</a>
                <a href="{{ route('register') }}">Registrar</a>
            @endif
        </div>
    </div>
</nav>