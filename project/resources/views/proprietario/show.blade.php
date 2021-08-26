@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Ver Funcionário')

@section('content')
<div class="limiter-default">
    <div class="container-view100">
        <div class="wrap-view100">
            <span class="home100-form-title">
                Ver Proprietario
            </span>
            <div class="container-login100-form-btn">
                <h4><b>ID: </b>{{ $proprietario->id }}</h4>
            </div>

            <div class="container-login100-form-btn">
                <h4><b>Nome: </b>{{ $proprietario->cnpj }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>CPF: </b>{{ $proprietario->tipo_pessoa }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Telefone: </b>{{ $proprietario->nome }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>E-mail: </b>{{ $proprietario->telefone }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $proprietario->email }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $proprietario->endereco }}</h4>
            </div>

            <div class="container-login100-form-btn">
                <form action="/proprietario">
                    <input type="submit" class="button-table-delete" value="Retornar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
