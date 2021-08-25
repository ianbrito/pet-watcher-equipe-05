@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Gestor')

@section('content')
    <div class="limiter-home">
        @if(Session::has('message'))
            <div class="container-md" style="margin-top:20px;">
                <div class="alert alert-warning alert-dismissible row-md" role="alert" id="liveAlert">
                    {{Session::get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <div class="container-home100">
            <div class="wrap-home100">
                @if($errors->all())
                    @foreach($errors->all() as $error)
                        <div>
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <div class="welcome-text">
                    <h3>
                        Seja bem vindo(a) ao Pet Watcher!
                    </h3>
                    <p>
                        Usuário ativo: <b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Data: {{ date('d/m/Y') }}
                    </p>
                </div>
                <div class="action-pic container-login100-form-btn">
                        <a class="button-action-home" href="{{ action('EspecieController@index') }}">
                            Gerenciamento de Espécies
                        </a>
                    </div>
                    <div class="action-pic container-login100-form-btn">
                        <a class="button-action-home" href="{{action('CredenciadaController@index')}}">
                            Gerenciamento de Credenciadas
                        </a>
                    </div>
                    <div class="action-pic container-login100-form-btn">
                        <a class="button-action-home" href="#">
                            Gerenciamento de Animais
                        </a>
                    </div>
                    <div class="action-pic container-login100-form-btn">
                        <a class="button-action-home" href="{{action('LicencaController@index')}}">
                            Gerenciamento de Licenças
                        </a>
                    </div>
                    <div class="action-pic container-login100-form-btn">
                        <a class="button-action-home" href="/funcionarios">
                            Gerenciamento de Funcionários
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
