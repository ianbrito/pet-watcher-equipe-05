@extends('layout')

@section('title', 'Cadastrar Animal')

@section('content')
<div class="limiter-default">
    @if($errors->all())
    @foreach($errors->all() as $error)
    <div>
        {{$error}}
    </div>
    @endforeach
    @endif
    <div class="container-insert200">
        <div class="wrap-new-entry-lic">
            <form action="{{ action('AnimalController@store') }}" method="post" class="nwe100-form validate-form">
                @csrf
                <span class="home100-form-title">
                    Cadastrar novo animal
                </span>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="tipo_aquisicao" name="tipo_aquisicao" placeholder="Tipo de aquisição">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="proprietario_id" name="proprietario_id" placeholder="Proprietario id">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-info-circle" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="nome" name="nome" placeholder="Nome">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="number" class="form-control input100" id="microship" name="microship" placeholder="Microship">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-at" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="especie" name="especie" placeholder="Especie">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="date" class="form-control input100" id="data_nascimento" name="data_nascimento" placeholder="Data de nascimento">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="fase" name="fase" placeholder="Fase">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="porte" name="porte" placeholder="Porte">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="sexo" name="sexo" placeholder="Sexo">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="pedigree" name="pedigree" placeholder="Pedigree">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="codigo_pedigree" name="codigo_pedigree" placeholder="Codigo Pedigree">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="origem_pedigree" name="origem_pedigree" placeholder="Origem Pedigree">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
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
