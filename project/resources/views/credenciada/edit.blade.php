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

        <form action="{{ action('CredenciadaController@update',$credenciada->id) }}" method="post">
            @csrf
            {{ method_field('put') }}
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <h2 style="margin-bottom: 20px">Editar Estabelecimento</h2>

                    <div class="mb-3" style="margin-top: 20px">
                        <label for="cnpj" class="form-label">CNPJ: </label>
                        <input type="text" class="form-control" name="cnpj" id="cnpj" value="{{$credenciada->cnpj}}">
                    </div>

                    <div class="mb-3">
                        <label for="inscricao_estadual" class="form-label">Inscrição Estadual: </label>
                        <input type="text" class="form-control" name="inscricao_estadual" id="inscricao_estadual"
                               value="{{$credenciada->inscricao_estadual}}">
                    </div>

                    <div class="mb-3">
                        <label for="razao_social" class="form-label">Razão Social: </label>
                        <input type="text" class="form-control" name="razao_social" id="razao_social"
                               value="{{$credenciada->razao_social}}">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone: </label>
                        <input type="text" class="form-control" name="telefone" id="telefone"
                               value="{{$credenciada->telefone}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail do estabelecimento: </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" class="form-control" name="email" id="email"
                                   value="{{$credenciada->email}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">endereço: </label>
                        <input type="text" class="form-control" name="endereco" id="endereco"
                               value="{{$credenciada->endereco}}">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Status</label>
                        <select name="active" class="form-select" aria-label="Default select example">
                            <option selected value="{{$credenciada->active}}">@if($credenciada->active)Ativo @else
                                    Desabilidado @endif</option>
                            <option value="true">Ativo</option>
                            <option value="false">Desabilidado</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="display: flex">
                    <div class="mb-3">
                        <a class="btn btn-primary" role="button" style="margin-right: 20px;"
                           href="{{action('CredenciadaController@index')}}">Voltar</a>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Salvar Alterações">
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
