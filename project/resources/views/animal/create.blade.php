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
                        <select class="form-control input100" id="tipo_aquisicao" name="tipo_aquisicao"
                                placeholder="Tipo de aquisição">
                            <option selected disabled>Tipo de Aquisição</option>
                            <option value="1">Criação Comercial</option>
                            <option value="2">Adoção</option>
                            <option value="3">De companhia</option>
                            <option value="4">Proteção Animal</option>
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-info" aria-hidden="true"></i>
                    </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="text" class="form-control input100" id="proprietario_id" name="proprietario_id"
                               placeholder="ID do Proprietário">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-info-circle" aria-hidden="true"></i>
                    </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="text" class="form-control input100" id="nome" name="nome"
                               placeholder="Nome Animal">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-user" aria-hidden="true"></i>
                    </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="number" class="form-control input100" id="microchip" name="microchip"
                               placeholder="Microchip">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-sim-card" aria-hidden="true"></i>
                    </span>
                    </div>
                    <!--<div class="wrap-input100 validate-input">
                        <input type="text" class="form-control input100" id="especie" name="especie" placeholder="Espécie">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fas fa-scroll" aria-hidden="true"></i>
                        </span>
                    </div>-->
                    <div class="wrap-input100 validate-input">
                        <select class="form-control input100" name="active" aria-label="Default select example">
                            <option selected disabled>Especie Animal</option>
                            @foreach($especies as $especie)
                                <option value="{{$especie->especie}}">{{$especie->especie}}</option>
                            @endforeach
                        </select>
                        <span class="symbol-input100">
                        <i class="fas fa-scroll" aria-hidden="true"></i>
                    </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="date" class="form-control input100" id="data_nascimento" name="data_nascimento"
                               placeholder="Data de Nascimento">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-calendar" aria-hidden="true"></i>
                    </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="text" class="form-control input100" id="fase" name="fase" placeholder="Fase">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-baby-carriage" aria-hidden="true"></i>
                    </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input type="text" class="form-control input100" id="porte" name="porte" placeholder="Porte">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-border-style" aria-hidden="true"></i>
                    </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <!--<input type="text" class="form-control input100" id="sexo" name="sexo" placeholder="Sexo">-->
                        <select class="form-control input100" id="sexo" name="sexo" placeholder="Tipo de aquisição">
                            <option selected disabled>Sexo do Animal</option>
                            <option value="Macho">Macho</option>
                            <option value="Femea">Fêmea</option>
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-venus-mars" aria-hidden="true"></i>
                    </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <select class="form-control input100" id="pedigree" name="pedigree" placeholder="Pedigree">
                            <option selected disabled>Pedigree?</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fas fa-genderless" aria-hidden="true"></i>
                    </span>
                    </div>

                    <div id="pedigree_infos">
                        <div class="wrap-input100 validate-input" id="pedigree_codigo">
                            <input type="text" class="form-control input100" id="codigo_pedigree" name="codigo_pedigree"
                                   placeholder="Código (Pedigree)">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            <i class="fas fa-qrcode" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="wrap-input100 validate-input" id="pedigree_origem">
                            <input type="text" class="form-control input100" id="origem_pedigree" name="origem_pedigree"
                                   placeholder="Origem (Pedigree)">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            <i class="fas fa-globe-americas" aria-hidden="true"></i>
                        </span>
                        </div>
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

    <script>
        $("#pedigree").change(function () {
            if ($(this).val() == "1") {
                $('#pedigree_infos').show();
                $('#pedigree_codigo').attr('required', '');
                $('#pedigree_codigo').attr('data-error', 'Este campo é obrigatório.');
                $('#pedigree_origem').attr('required', '');
                $('#pedigree_origem').attr('data-error', 'Este campo é obrigatório.');
            } else {
                $('#pedigree_infos').hide();
                $('#pedigree_codigo').removeAttr('required');
                $('#pedigree_codigo').removeAttr('data-error');
                $('#pedigree_origem').removeAttr('required');
                $('#pedigree_origem').removeAttr('data-error');
            }
        });
        $("#pedigree").trigger("change");
    </script>

@endsection
