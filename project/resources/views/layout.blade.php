<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pet Watcher - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
          integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css"
          integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.2/css/perfect-scrollbar.css"
          integrity="sha512-2xznCEl5y5T5huJ2hCmwhvVtIGVF1j/aNUEJwi/BzpWPKEzsZPGpwnP1JrIMmjPpQaVicWOYVu8QvAIg9hwv9w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href=@yield('extra_css')>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand">
                <img src="/img/pw_topbar_icon.png" alt="Pet Watcher Logo"
                     width="32" height="32" class="d-inline-block align-text-top">
                 Pet Watcher
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if(
                        auth()->check() &&
                        \Illuminate\Support\Facades\Auth::user()->user_type == 3 &&
                        (request()->is('especie*') ||
                        request()->is('credenciada*') ||
                        request()->is('licenca*') ||
                        request()->is('funcionarios*'))
                        )
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ action('PetWatcherController@dashboard') }}">Início</a>
                        </li>
                        <!-- TODO: direcionar para a view/controlador dos animais quando implementado. -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="#">Animais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ action('EspecieController@index') }}">Espécies</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{action('CredenciadaController@index')}}">Credenciadas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{action('LicencaController@index')}}">Licenças</a>
                        </li>
                    @endif
                    @if (auth()->check() &&
                        \Illuminate\Support\Facades\Auth::user()->user_type == 2 && (
                        request()->is('especie*') ||
                        request()->is('credenciada*') ||
                        request()->is('licenca*') ||
                        request()->is('funcionarios*'))
                        )
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ action('PetWatcherController@dashboard') }}">Início</a>
                        </li>
                        <!-- TODO: direcionar para a view/controlador dos animais quando implementado. -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="#">Animais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ action('FuncionarioController@index') }}">Funcionários</a>
                        </li>
                    @endif
                    @if(auth()->check() &&
                        \Illuminate\Support\Facades\Auth::user()->user_type == 1 &&
                        (request()->is('especie*') ||
                        request()->is('credenciada*') ||
                        request()->is('licenca*') ||
                        request()->is('funcionarios*'))
                        )
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="{{ action('PetWatcherController@dashboard') }}">Início</a>
                        </li>
                        <!-- TODO: direcionar para a view/controlador dos animais quando implementado. -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="#">Animais</a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav" style="margin-left: auto;">
                    @if(auth()->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWhiteDropdownMenuLink" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" style="color: black !important;">
                                USUÁRIO:&#32;{{\Illuminate\Support\Facades\Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarWhiteDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{action('UserController@edit')}}">Mudar Senha</a></li>
                                <li><a class="dropdown-item" href="{{action('Auth\LoginController@logout')}}">Logout</a>
                                </li>
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
