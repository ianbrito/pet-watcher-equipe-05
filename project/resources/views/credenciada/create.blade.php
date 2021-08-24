@extends('layout')

@section('title', 'Cadastrar Espécie')

@section('content')
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

    <div class="limiter-credential">
        <div class="container-insert300">
            <div class="wrap-new-entry-lic2">
                <form action="{{ action('CredenciadaController@store') }}" method="post">
                    @csrf
                    <span class="home100-form-title">
                        Cadastrar novo estabelecimento
                    </span>

                    <!-- Dados do Estabelecimento -->
                    <h3 style="font-family: Poppins, sans-serif; font-size: 22px; margin-bottom: 10px; margin-top: 10px">Dados do Estabelecimento</h3>
                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="CNPJ" name="cnpj" id="cnpj" value="{{ old('cnpj') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-address-card" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="Inscrição Estadual" name="inscricao_estadual" id="inscricao_estadual"
                               value="{{ old('inscricao_estadual') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-info-circle" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100" style="margin-top: 20px">
                        <input type="text" class="form-control input100" placeholder="Razão Social" name="razao_social" id="razao_social"
                               value="{{ old('razao_social') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="Telefone" name="telefone" id="telefone"
                               value="{{ old('telefone') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-phone" aria-hidden="true"></i>
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
                               value="{{ old('endereco') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        </span>
                    </div>

                    <!-- Dados do Gestor -->
                    <h3 style="font-family: Poppins, sans-serif; font-size: 22px; margin-bottom: 10px; margin-top: 10px">Dados do Gestor</h3>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="Nome" name="name" id="name" value="{{ old('name') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input type="text" class="form-control input100" placeholder="E-mail" name="email_gestor" id="email_gestor"
                               value="{{ old('cnpj') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-at" aria-hidden="true"></i>
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
