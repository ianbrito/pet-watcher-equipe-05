@extends('layout')

@section('title', 'Editar Credenciada')

@section('content')
    <div class="container-sm">
        @if(Session::has('message'))
            <div class="container-md" style="margin-top:20px;">
                <div class="alert {{Session::get('type')}} alert-dismissible row-md" role="alert" id="liveAlert">
                    {{Session::get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if($errors->all())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible row-md" role="alert" id="liveAlert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif
    </div>
    <div class="limiter-credential">
        <div class="container-insert300">
            <div class="wrap-new-entry-lic2">
                <form action="{{ action('CredenciadaController@update',$credenciada->id) }}" method="post">
                    @csrf
                    {{ method_field('put') }}
                    <span class="home100-form-title">
                        Editar estabelecimento
                    </span>
                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="CNPJ" name="cnpj" id="cnpj" value="{{$credenciada->cnpj}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-address-card" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="Inscrição Estadual" name="inscricao_estadual" id="inscricao_estadual"
                               value="{{$credenciada->inscricao_estadual}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-info-circle" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100" style="margin-top: 20px">
                        <input type="text" class="form-control input100" placeholder="Razão Social" name="razao_social" id="razao_social"
                               value="{{$credenciada->razao_social}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="Telefone" name="telefone" id="telefone"
                               value="{{$credenciada->telefone}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="E-mail" name="email" id="email" value="{{$credenciada->email}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-at" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="E-mail" name="email" id="email" value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-at" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="Endereço" name="endereco" id="endereco"
                               value="{{$credenciada->endereco}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <select class="form-control input100" name="active" aria-label="Default select example">
                            <option disabled>Status</option>
                            <option selected value="{{$credenciada->active}}">@if($credenciada->active)Habilitado @else
                                    Desabilitado @endif</option>
                            <option value="false">Desabilitado</option>
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-exclamation" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="Salvar Alterações">
                        <a class="button-action-back" role="button"
                           href="{{action('CredenciadaController@index')}}">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
