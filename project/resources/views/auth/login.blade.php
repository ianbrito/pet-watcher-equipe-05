@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="limiter-login">
        <div class="container-login100">
            <div class="wrap-login100">
                <div>
                    @if($errors->all())
                        @foreach ($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    @endif
                </div>
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="/img/pet_watcher_logo.png" style="border: solid 1px #ffffff; border-radius: 30px;"
                         alt="IMG">
                </div>
                <form action="{{ action('Auth\LoginController@login') }}" method="post"
                      class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
                    Login do Sistema
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input type="text" class="form-control input100" id="inputPassword1" name="username"
                               placeholder="Login">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="password" class="form-control input100" id="inputPassword1" name="password"
                               placeholder="Senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="Entrar">
                    </div>
                    <div class="text-center p-t-12">
                    </div>
                    <div class="text-center p-t-136">
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
