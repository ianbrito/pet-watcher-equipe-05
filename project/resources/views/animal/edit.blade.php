@extends('layout')

@section('title', 'Editar Animal')

@section('content')
<div class="limiter-default">
    <div class="container-insert200">
        <div class="wrap-new-entry-lic">
            @if($errors->all())
            @foreach($errors->all() as $error)
            <div>
                {{$error}}
            </div>
            @endforeach
            @endif
            <form action="{{ action('AnimalController@update', $animal->id) }}" method="post" class="nwe100-form validate-form">
                @csrf
                {{ method_field('put') }}
                <span class="home100-form-title">
                    Editar dados do animal
                </span>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="tipo_aquisicao" name="tipo_aquisicao" placeholder="Tipo Aquisição" value="{{ $animal->tipo_aquisicao }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="proprietario_id" name="proprietario_id" placeholder="Proprietario id" value="{{ $animal->proprietario_id}}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-info-circle" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="nome" name="nome" placeholder="Nome" value="{{ $animal->nome }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="microship" name="microship" placeholder="Microship" value="{{ $animal->microship }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-at" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="especie" name="especie" placeholder="Especie" value="{{ $animal->especie }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="data_nascimento" name="data_nascimento" placeholder="Data de nascimento" value="{{ $animal->data_nascimento }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="fase" name="fase" placeholder="Fase" value="{{ $animal->fase }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="porte" name="porte" placeholder="Porte" value="{{ $animal->porte }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="sexo" name="sexo" placeholder="Sexo" value="{{ $animal->sexo }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="pedigree" name="pedigree" placeholder="Pedrigree" value="{{ $animal->pedigree }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="codigo_pedigree" name="codigo_pedigree" placeholder="Código Pedrigree" value="{{ $animal->codigo_pedigree }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input type="text" class="form-control input100" id="origem_pedigree" name="origem_pedigree" placeholder="Origem Pedrigree" value="{{ $animal->origem_pedigree }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
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
