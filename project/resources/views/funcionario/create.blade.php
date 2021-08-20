@extends('layout')

@section('title', 'Cadastrar Funcionario')

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
            <form action="{{ action('FuncionarioController@store') }}" method="post" class="nwe100-form validate-form">
                @csrf
                <span class="home100-form-title">
                    Cadastrar novo Funcionario
                </span>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="funcionario" name="nome" placeholder="Nome do funcionario">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="cpf" name="cpf" placeholder="Cpf do funcionario">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="telefone" name="telefone" placeholder="Telefone do funcionario">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="email" name="email" placeholder="Email do funcionario">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="endereco" name="endereco" placeholder="Endereço do funcionario">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" value="Cadastrar">
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
