<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pet Watcher E5 - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-md">
        <a class="navbar-brand" href="/">Pet Watcher</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(auth()->check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                           href="{{ action('PetWatcherController@home') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                           href="{{ action('EspecieController@index') }}">Espécies</a>
                    </li>

                @endif
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav" style="margin-left: auto;">
                @if(auth()->check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff !important;">
                            USUÁRIO:&#32;{{\Illuminate\Support\Facades\Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{action('UserController@edit')}}">Alterar Senha</a></li>
                            <li><a class="dropdown-item" href="{{action('Auth\LoginController@logout')}}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

    </div>
</nav>


@yield('content')
</body>
</html>
