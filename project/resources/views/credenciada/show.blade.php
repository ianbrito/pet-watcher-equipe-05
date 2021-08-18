@extends('layout')

@section('title', 'Ver Credenciada')

@section('content')
    <div class="container-sm">
        <div class="card" style="margin-top: 20px;">
            <div class="card-body">
                <p class="h3" style="margin-bottom: 40px;">Dados do Estabelecimento Credenciado</p>

                <dl class="row">
                    <dt class="col-sm-3">CNPJ:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->cnpj}}</dd>
                </dl>

                <dl class="row">
                    <dt class="col-sm-3">Inscrição Estadual:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->inscricao_estadual}}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Razão Social:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->razao_social}}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Telefone:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->telefone}}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">E-mail:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->email}}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Endereço:</dt>
                    <dd class="col-sm-9">{{($credenciada ?? '')->endereco}}</dd>
                </dl>
                <a class="btn btn-primary" role="button"
                   href="{{action('CredenciadaController@index')}}">Voltar</a>
                <a class="btn btn-primary" role="button"
                   href="/credenciada/credenciada_{{ $credenciada->id }}/edit">Editar</a>
            </div>
        </div>
    </div>

@endsection
