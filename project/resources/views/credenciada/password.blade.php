@extends('layout')

@section('title', 'Login')

@section('content')

    @if(Session::has('message'))
        <div class="container-md" style="margin-top:20px;">
            <div class="alert {{Session::get('type')}} alert-dismissible row-md" role="alert" id="liveAlert">
                {{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif



    <div class="limiter-default">
        <div class="container-insert200">
            <div class="wrap-new-entry-lic">
                <form action="{{ action('CredenciadaController@updatePassword',$user->id) }}" method="post">
                    @csrf
                    {{ method_field('put') }}
                    <span class="home100-form-title">
                        Alterar senha de {{$credenciada->cnpj}}
                    </span>

                    <div class="wrap-input100">
                        <input type="password" class="form-control input100" id="inputPassword1" name="senha_atual" placeholder="Senha Atual">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                                <i class="fas fa-lock" aria-hidden="true"></i>
                            </span>
                    </div>
                    <div class="wrap-input100">
                        <input type="password" class="form-control input100" id="inputPassword1" name="senha_nova" placeholder="Nova Senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                                <i class="fas fa-key" aria-hidden="true"></i>
                            </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="Alterar senha">
                    </div>

                    <div class="container-login100-form-btn">
                        <a class="button-cancel-action" href="{{ action('CredenciadaController@index') }}">Cancelar</a>
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
