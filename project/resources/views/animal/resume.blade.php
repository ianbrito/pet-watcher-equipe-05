@extends('layout')

@section('title', 'Ver Credenciada')

@section('content')
    <div class="limiter-default">
        <div class="container-view-cred">
            <div class="wrap-credential">
                <span class="home100-form-title">
                    Resultado da Pesquisa
                </span>

                @if(\Illuminate\Support\Facades\Auth::user()->user_type == 2)
                    @if($credenciada_auth->id == $animal->credenciada_id)
                        <div
                            style="border: solid 1px; width: 100%;padding: 10px; border-radius: 4px;margin-bottom: 20px;">

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Proprietário(a):</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->nome}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">CPF/CNPJ:</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->identificador}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Tipo de Pessoa</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->tipo_pessoa}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Telefone</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->telefone}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Email</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->email}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Endereço</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->endereco}}</dd>
                            </dl>

                        </div>


                        <div style="border: solid 1px; width: 100%;padding: 10px;border-radius: 4px;">
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Nome do Animal:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->nome}}</dd>
                                <dt class="col-sm-3">Tipo Aquisição:</dt>
                                <dd class="col-sm-3">
                                    @if($animal->tipo_aquisicao == 1)
                                        Criação Comercial
                                    @elseif($animal->tipo_aquisicao == 2)
                                        Adoção
                                    @elseif($animal->tipo_aquisicao == 3)
                                        De companhia
                                    @elseif($animal->tipo_aquisicao == 1)
                                        Proteção Animal
                                    @endif
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Código Microchip:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->microship}}</dd>
                                <dt class="col-sm-3">Espécie do Animal</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->especie}}</dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Data de Nascimento:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->data_nascimento}}</dd>
                                <dt class="col-sm-3">Fase</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->fase}}</dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Porte:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->porte}}</dd>
                                <dt class="col-sm-3">Sexo</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->sexo}}</dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Pedigree:</dt>
                                <dd class="col-sm-9">
                                    @if($animal->pedigree)
                                        Possui
                                    @else
                                        Não Possui
                                    @endif
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Código Pedigree:</dt>
                                <dd class="col-sm-3">
                                    @if($animal->codigo_pedigree == '')
                                        NDA
                                    @endif
                                    {{($animal ?? '')->codigo_pedigree}}</dd>
                                <dt class="col-sm-3">Origem Pedigree:</dt>
                                <dd class="col-sm-3">
                                    @if($animal->origem_pedigree == '')
                                        NDA
                                    @endif
                                    {{($animal ?? '')->origem_pedigree}}</dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Data do Catastro do Animal:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->data_cadastro}}</dd>
                                <dt class="col-sm-3">Status:</dt>
                                <dd class="col-sm-3">
                                    @if($animal->ativo)
                                        Ativo
                                    @else
                                        Inativo
                                    @endif
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Motivo</dt>
                                <dd class="col-sm-9">
                                    @if($animal->motivo == '')
                                        NDA
                                    @else
                                        {{$animal->motivo}}
                                    @endif
                                </dd>
                            </dl>
                        </div>
                    @else
                        <div
                            style="border: solid 1px; width: 100%;padding: 10px; border-radius: 4px;margin-bottom: 20px;">
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Estabelecimento do registro do animal:</dt>
                                <dd class="col-sm-9">{{$credenciada->razao_social}}
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Telefone:</dt>
                                <dd class="col-sm-9">{{$credenciada->telefone}}
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Email:</dt>
                                <dd class="col-sm-9">{{$credenciada->email}}
                                </dd>
                            </dl>
                        </div>

                        <div style="border: solid 1px; width: 100%;padding: 10px;border-radius: 4px;">
                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Nome do Animal:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->nome}}</dd>
                                <dt class="col-sm-3">Código Microchip:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->microship}}</dd>
                            </dl>
                        </div>
                    @endif
                @elseif(\Illuminate\Support\Facades\Auth::user()->user_type == 1)
                    @if($funcionario->credenciada_id == $credenciada->id)
                        <div
                            style="border: solid 1px; width: 100%;padding: 10px; border-radius: 4px;margin-bottom: 20px;">

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Proprietário(a):</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->nome}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">CPF/CNPJ:</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->identificador}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Tipo de Pessoa</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->tipo_pessoa}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Telefone</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->telefone}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Email</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->email}}</dd>
                            </dl>

                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Endereço</dt>
                                <dd class="col-sm-9">{{($proprietario ?? '')->endereco}}</dd>
                            </dl>
                        </div>


                        <div style="border: solid 1px; width: 100%;padding: 10px;border-radius: 4px;">
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Nome do Animal:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->nome}}</dd>
                                <dt class="col-sm-3">Tipo Aquisição:</dt>
                                <dd class="col-sm-3">
                                    @if($animal->tipo_aquisicao == 1)
                                        Criação Comercial
                                    @elseif($animal->tipo_aquisicao == 2)
                                        Adoção
                                    @elseif($animal->tipo_aquisicao == 3)
                                        De companhia
                                    @elseif($animal->tipo_aquisicao == 1)
                                        Proteção Animal
                                    @endif
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Código Microchip:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->microship}}</dd>
                                <dt class="col-sm-3">Espécie do Animal</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->especie}}</dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Data de Nascimento:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->data_nascimento}}</dd>
                                <dt class="col-sm-3">Fase</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->fase}}</dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Porte:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->porte}}</dd>
                                <dt class="col-sm-3">Sexo</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->sexo}}</dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Pedigree:</dt>
                                <dd class="col-sm-9">
                                    @if($animal->pedigree)
                                        Possui
                                    @else
                                        Não Possui
                                    @endif
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Código Pedigree:</dt>
                                <dd class="col-sm-3">
                                    @if($animal->codigo_pedigree == '')
                                        NDA
                                    @endif
                                    {{($animal ?? '')->codigo_pedigree}}</dd>
                                <dt class="col-sm-3">Origem Pedigree:</dt>
                                <dd class="col-sm-3">
                                    @if($animal->origem_pedigree == '')
                                        NDA
                                    @endif
                                    {{($animal ?? '')->origem_pedigree}}</dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Data do Catastro do Animal:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->data_cadastro}}</dd>
                                <dt class="col-sm-3">Status:</dt>
                                <dd class="col-sm-3">
                                    @if($animal->ativo)
                                        Ativo
                                    @else
                                        Inativo
                                    @endif
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Motivo</dt>
                                <dd class="col-sm-9">
                                    @if($animal->motivo == '')
                                        NDA
                                    @else
                                        {{$animal->motivo}}
                                    @endif
                                </dd>
                            </dl>
                        </div>
                    @else
                        <div
                            style="border: solid 1px; width: 100%;padding: 10px; border-radius: 4px;margin-bottom: 20px;">
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Estabelecimento do registro do animal:</dt>
                                <dd class="col-sm-9">{{$credenciada->razao_social}}
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                                <dt class="col-sm-3">Telefone:</dt>
                                <dd class="col-sm-9">{{$credenciada->telefone}}
                                </dd>
                            </dl>
                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Email:</dt>
                                <dd class="col-sm-9">{{$credenciada->email}}
                                </dd>
                            </dl>
                        </div>

                        <div style="border: solid 1px; width: 100%;padding: 10px;border-radius: 4px;">
                            <dl class="container-login100-form-btn">
                                <dt class="col-sm-3">Nome do Animal:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->nome}}</dd>
                                <dt class="col-sm-3">Código Microchip:</dt>
                                <dd class="col-sm-3">{{($animal ?? '')->microship}}</dd>
                            </dl>
                        </div>
                    @endif
                @else
                    <div style="border: solid 1px; width: 100%;padding: 10px; border-radius: 4px;margin-bottom: 20px;">

                        <dl class="container-login100-form-btn">
                            <dt class="col-sm-3">Proprietário(a):</dt>
                            <dd class="col-sm-9">{{($proprietario ?? '')->nome}}</dd>
                        </dl>

                        <dl class="container-login100-form-btn">
                            <dt class="col-sm-3">CPF/CNPJ:</dt>
                            <dd class="col-sm-9">{{($proprietario ?? '')->identificador}}</dd>
                        </dl>

                        <dl class="container-login100-form-btn">
                            <dt class="col-sm-3">Tipo de Pessoa</dt>
                            <dd class="col-sm-9">{{($proprietario ?? '')->tipo_pessoa}}</dd>
                        </dl>

                        <dl class="container-login100-form-btn">
                            <dt class="col-sm-3">Telefone</dt>
                            <dd class="col-sm-9">{{($proprietario ?? '')->telefone}}</dd>
                        </dl>

                        <dl class="container-login100-form-btn">
                            <dt class="col-sm-3">Email</dt>
                            <dd class="col-sm-9">{{($proprietario ?? '')->email}}</dd>
                        </dl>

                        <dl class="container-login100-form-btn">
                            <dt class="col-sm-3">Endereço</dt>
                            <dd class="col-sm-9">{{($proprietario ?? '')->endereco}}</dd>
                        </dl>

                    </div>


                    <div style="border: solid 1px; width: 100%;padding: 10px;border-radius: 4px;">
                        <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                            <dt class="col-sm-3">Nome do Animal:</dt>
                            <dd class="col-sm-3">{{($animal ?? '')->nome}}</dd>
                            <dt class="col-sm-3">Tipo Aquisição:</dt>
                            <dd class="col-sm-3">
                                @if($animal->tipo_aquisicao == 1)
                                    Criação Comercial
                                @elseif($animal->tipo_aquisicao == 2)
                                    Adoção
                                @elseif($animal->tipo_aquisicao == 3)
                                    De companhia
                                @elseif($animal->tipo_aquisicao == 1)
                                    Proteção Animal
                                @endif
                            </dd>
                        </dl>
                        <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                            <dt class="col-sm-3">Código Microchip:</dt>
                            <dd class="col-sm-3">{{($animal ?? '')->microship}}</dd>
                            <dt class="col-sm-3">Espécie do Animal</dt>
                            <dd class="col-sm-3">{{($animal ?? '')->especie}}</dd>
                        </dl>
                        <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                            <dt class="col-sm-3">Data de Nascimento:</dt>
                            <dd class="col-sm-3">{{($animal ?? '')->data_nascimento}}</dd>
                            <dt class="col-sm-3">Fase</dt>
                            <dd class="col-sm-3">{{($animal ?? '')->fase}}</dd>
                        </dl>
                        <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                            <dt class="col-sm-3">Porte:</dt>
                            <dd class="col-sm-3">{{($animal ?? '')->porte}}</dd>
                            <dt class="col-sm-3">Sexo</dt>
                            <dd class="col-sm-3">{{($animal ?? '')->sexo}}</dd>
                        </dl>
                        <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                            <dt class="col-sm-3">Pedigree:</dt>
                            <dd class="col-sm-9">
                                @if($animal->pedigree)
                                    Possui
                                @else
                                    Não Possui
                                @endif
                            </dd>
                        </dl>
                        <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                            <dt class="col-sm-3">Código Pedigree:</dt>
                            <dd class="col-sm-3">
                                @if($animal->codigo_pedigree == '')
                                    NDA
                                @endif
                                {{($animal ?? '')->codigo_pedigree}}</dd>
                            <dt class="col-sm-3">Origem Pedigree:</dt>
                            <dd class="col-sm-3">
                                @if($animal->origem_pedigree == '')
                                    NDA
                                @endif
                                {{($animal ?? '')->origem_pedigree}}</dd>
                        </dl>
                        <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                            <dt class="col-sm-3">Data do Catastro do Animal:</dt>
                            <dd class="col-sm-3">{{($animal ?? '')->data_cadastro}}</dd>
                            <dt class="col-sm-3">Status:</dt>
                            <dd class="col-sm-3">
                                @if($animal->ativo)
                                    Ativo
                                @else
                                    Inativo
                                @endif
                            </dd>
                        </dl>
                        <dl class="container-login100-form-btn" style="border-bottom: solid;padding-left: 10px;">
                            <dt class="col-sm-3">Motivo</dt>
                            <dd class="col-sm-9">
                                @if($animal->motivo == '')
                                    NDA
                                @else
                                    {{$animal->motivo}}
                                @endif
                            </dd>
                        </dl>
                    </div>
                @endif

                <a class="button-action-back" role="button"
                   href="{{action('PetWatcherController@dashboard')}}">Voltar</a>
            </div>
        </div>
    </div>
@endsection
