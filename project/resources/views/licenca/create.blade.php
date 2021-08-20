@extends('layout')
@section('extra_css', '/css/table.css')
@section('title', 'Cadastrar Espécie')

@section('content')
    <div class="limiter-default">
        <div class="container-insert200">
            <div class="wrap-new-entry-lic">
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

                <form action="{{ action('LicencaController@store') }}" method="post" class="nwe100-form validate-form">
                    @csrf
                    <span class="home100-form-title">
                        Cadastrar nova licença
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input type="text" class="form-control input100" id="cnpj" name="cnpj"
                               placeholder="CNPJ">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-address-card" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="date" class="form-control input100" id="emissao" name="emissao"
                               pattern="\d{4}-\d{2}-\d{2}" placeholder="Data de licenciamento">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-stamp" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="date" class="form-control input100" id="validade" name="validade"
                               pattern="\d{4}-\d{2}-\d{2}" placeholder="Data de validade">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-calendar-times" aria-hidden="true"></i>
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
