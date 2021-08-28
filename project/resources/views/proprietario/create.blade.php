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
            <form action="{{action('ProprietarioController@store')}}" method="post">
                @csrf
                <span class="home100-form-title">
                    Cadastrar novo Proprietario
                </span>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" name="identificador" placeholder="CPF ou CNPJ">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <select class="form-control input100" name="active" aria-label="Default select example">
                        <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                        <option value="Pessoa Física">Pessoa Física</option>
                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" name="nome" placeholder="Nome">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" name="telefone" placeholder="Telefone">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" name="email" placeholder="E-mail">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-paw" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" name="endereco" placeholder="Endereço">
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
        </div>
    </div>
</div>
@stop
