@extends('layout')

@section('title', 'Editar Funcionario')

@section('content')
<div class="limiter-default">
    <div class="container-insert100">
        <div class="wrap-new-entry100">
            @if($errors->all())
            @foreach($errors->all() as $error)
            <div>
                {{$error}}
            </div>
            @endforeach
            @endif
            <form action="{{ action('FuncionarioController@update', $funcionario->id) }}" method="post" class="nwe100-form validate-form">
                @csrf
                {{ method_field('put') }}
                <span class="home100-form-title">
                    Editar dados do funcionario
                </span>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="funcionario" name="nome" placeholder="Nome do funcionário" value="{{ $funcionario->nome }}">
                    <input type="text" class="form-control input100" id="funcionario" name="cpf" placeholder="Cpf do funcionário" value="{{ $funcionario->cpf }}">
                    <input type="text" class="form-control input100" id="funcionario" name="email" placeholder="Email do funcionário" value="{{ $funcionario->email }}">
                    <input type="text" class="form-control input100" id="funcionario" name="telefone" placeholder="Telefone do funcionário" value="{{ $funcionario->telefone }}">
                    <input type="text" class="form-control input100" id="funcionario" name="endereco" placeholder="Endereço do funcionário" value="{{ $funcionario->endereco }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" value="Salvar alterações">
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
