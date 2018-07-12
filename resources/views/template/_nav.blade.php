<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      @include('template/menu')

    </ul>
    <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Bejelentkezés</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Regisztráció</a>
            </li>
        @else
            <li class="nav-item dropleft">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profil beállítások</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('news.create') }}">Hír létrehozás</a>
                    <a class="dropdown-item" href="#">GYIK létrehozás</a>
                    <a class="dropdown-item" href="#">Aktív bejelentések</a>
                    <a class="dropdown-item" href="#">Lezárt bejelentések</a>
                    <a class="dropdown-item" href="#">Új árajánlat</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Kijelentkezés</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </div>
</nav>
