@extends('layout')

@section('title', 'Editar Proprietario')

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
            <form action="{{action('ProprietarioController@update',$proprietario->id)}}" method="post" class="nwe100-form validate-form">
                @csrf
                {{ method_field('put') }}
                <span class="home100-form-title">
                    Editar dados do Proprietario
                </span>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="proprietario" name="identificador" placeholder="Nome do proprietário" value="{{ $proprietario->identificador }}">
                    <input type="text" class="form-control input100" id="proprietario" name="tipo_pessoa" placeholder="Cpf do proprietário" value="{{ $proprietario->tipo_pessoa }}">
                    <input type="text" class="form-control input100" id="proprietario" name="nome" placeholder="Email do proprietário" value="{{ $proprietario->nome }}">
                    <input type="text" class="form-control input100" id="proprietario" name="telefone" placeholder="Telefone do proprietário" value="{{ $proprietario->telefone }}">
                    <input type="text" class="form-control input100" id="proprietario" name="email" placeholder="Endereço do proprietário" value="{{ $proprietario->email }}">
                    <input type="text" class="form-control input100" id="proprietario" name="endereco" placeholder="Endereço do proprietário" value="{{ $proprietario->endereco }}">
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
