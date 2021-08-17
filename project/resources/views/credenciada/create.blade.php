@extends('layout')

@section('title', 'Cadastrar Espécie')

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

        <form action="{{ action('CredenciadaController@store') }}" method="post">
            @csrf
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <h2 style="margin-bottom: 20px">Cadastrar novo estabelecimento</h2>

                    <div class="mb-3" style="margin-top: 20px">
                        <label for="cnpj" class="form-label">CNPJ: </label>
                        <input type="text" class="form-control" name="cnpj" id="cnpj">
                    </div>

                    <div class="mb-3">
                        <label for="inscricao_estadual" class="form-label">Inscrição Estadual: </label>
                        <input type="text" class="form-control" name="inscricao_estadual" id="inscricao_estadual">
                    </div>

                    <div class="mb-3">
                        <label for="razao_social" class="form-label">Razão Social: </label>
                        <input type="text" class="form-control" name="razao_social" id="razao_social">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone: </label>
                        <input type="text" class="form-control" name="telefone" id="telefone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail do estabelecimento: </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">endereço: </label>
                        <input type="text" class="form-control" name="endereco" id="endereco">
                    </div>

                    <h3 style="margin-bottom: 20px">Informações do Gestor</h3>

                    <div class="mb-3" style="margin-top: 20px">
                        <label for="especie" class="form-label">Nome: </label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="especie" class="form-label">E-mail do Gestor: </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" class="form-control" name="email_gestor" id="email_gestor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
