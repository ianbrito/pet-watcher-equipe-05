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
                <h4><b>Nome da Funcionario: </b>{{ $funcionario->nome }}</h4>
                <h4><b>Cpf do Funcionario: </b>{{ $funcionario->cpf }}</h4>
                <h4><b>Telefone do Funcionario: </b>{{ $funcionario->telefone }}</h4>
                <h4><b>Email do Funcionario: </b>{{ $funcionario->email }}</h4>
                <h4><b>Endereço do Funcionario: </b>{{ $funcionario->endereco }}</h4>
            </div>

            <div class="container-login100-form-btn">
                <form action="/funcionarios">
                    <input type="submit" class="button-table-delete" value="Retornar">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
