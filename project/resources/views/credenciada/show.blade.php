@extends('layout')

@section('title', 'Ver Credenciada')

@section('content')
    <div class="limiter-default">
        <div class="container-view-cred">
            <div class="wrap-credential">
                <span class="home100-form-title">
                    Dados do Estabelecimento Credenciado
                </span>

                <dl class="container-login100-form-btn">
                    <dt class="col-sm-3">CNPJ:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->cnpj}}</dd>
                </dl>

                <dl class="container-login100-form-btn">
                    <dt class="col-sm-3">Inscrição Estadual:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->inscricao_estadual}}</dd>
                </dl>
                <dl class="container-login100-form-btn">
                    <dt class="col-sm-3">Razão Social:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->razao_social}}</dd>
                </dl>
                <dl class="container-login100-form-btn">
                    <dt class="col-sm-3">Telefone:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->telefone}}</dd>
                </dl>
                <dl class="container-login100-form-btn">
                    <dt class="col-sm-3">E-mail:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->email}}</dd>
                </dl>
                <dl class="container-login100-form-btn">
                    <dt class="col-sm-3">Endereço:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->endereco}}</dd>
                </dl>
                <a class="button-action-back" role="button"
                   href="{{action('CredenciadaController@index')}}">Voltar</a>
                <a class="button-action-edit" role="button"
                   href="/credenciada/credenciada_{{ $credenciada->id }}/edit">Editar</a>
                <a class="button-action-pass-edit" role="button"
                   href="/credenciada/credenciada_{{ $credenciada->id }}/password">Alterar senha</a>
                @if($credenciada->active)
                    <a class="button-action-disable" role="button" href="#">
                        <form action="{{ action('CredenciadaController@destroy', $credenciada->id) }}" method="post"
                              onsubmit="return confirm('Você deseja desabilitar este registro (&quot;{{ $credenciada->razao_social }}&quot;) do sistema?')">
                            @csrf
                            {{ method_field('delete') }}
                            <input class="button-form-adaptative" type="submit" value="Desabilitar">
                        </form>
                    </a>
                @else
                    <a class="button-action-enable" role="button" href="#">
                        <form action="{{ action('CredenciadaController@destroy', $credenciada->id) }}" method="post"
                              onsubmit="return confirm('Você deseja ativar este registro (&quot;{{ $credenciada->razao_social }}&quot;) do sistema?')">
                            @csrf
                            {{ method_field('delete') }}
                            <input class="button-form-adaptative" type="submit" value="Habilitar">
                        </form>
                    </a>
                @endif
            </div>
        </div>
    </div>

@endsection
