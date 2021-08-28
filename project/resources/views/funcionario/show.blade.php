@extends('layout')
@section('extra_css', '/css/table.css')

@section('title', 'Ver Funcionário')

@section('content')
<div class="limiter-default">
    <div class="container-view100">
        <div class="wrap-view100">
            <span class="home100-form-title">
                Ver Funcionário
            </span>
            <div class="container-login100-form-btn">
                <h4><b>ID: </b>{{ $funcionario->id }}</h4>
            </div>

            <div class="container-login100-form-btn">
                <h4><b>Nome: </b>{{ $funcionario->nome }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>CPF: </b>{{ $funcionario->cpf }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Telefone: </b>{{ $funcionario->telefone }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>E-mail: </b>{{ $funcionario->email }}</h4>
            </div>
            <div class="container-login100-form-btn">
                <h4><b>Endereço: </b>{{ $funcionario->endereco }}</h4>
            </div>

            <div class="container-login100-form-btn">
                <form action="{{action('FuncionarioController@index')}}">
                    <input type="submit" class="button-table-delete" value="Retornar">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
