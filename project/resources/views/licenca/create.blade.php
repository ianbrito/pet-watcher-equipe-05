@extends('layout')
@section('extra_css', '/css/table.css')
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

        <form action="{{ action('LicencaController@store') }}" method="post">
            @csrf
            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <h2 style="margin-bottom: 20px">Cadastrar nova Licença</h2>


                    <div class="mb-3" style="margin-top: 20px">
                        <label for="cnpj" class="form-label">CNPJ: </label>
                        <input type="text" class="form-control" name="cnpj" id="cnpj">
                    </div>

                    <div class="mb-3">
                        <label for="emissao" class="form-label">Data de licenciamento</label>
                        <input type="date" class="form-control" name="emissao" id="emissao" pattern="\d{4}-\d{2}-\d{2}">
                    </div>

                    <div class="mb-3">
                        <label for="validade" class="form-label">Data de vencimento</label>
                        <input type="date" class="form-control" name="validade" id="validade">
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3" style="display: flex">
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                        <a class="btn btn-primary" role="button" style="margin-left: 20px"
                           href="{{action('LicencaController@index')}}">Voltar</a>
                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection
