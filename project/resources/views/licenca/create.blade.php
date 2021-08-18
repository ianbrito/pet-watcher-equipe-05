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


        <div class="card" style="margin-top: 20px;">
            <div class="card-body">
                <h2 style="margin-bottom: 20px">Cadastrar nova Licença</h2>

                <form action="{{ action('LicencaController@store') }}" method="post">
                    @csrf
                    <div class="mb-3" style="margin-top: 20px">
                        <label for="cnpj1" class="form-label">CNPJ: </label>
                        <input type="text" class="form-control" name="cnpj1" id="cnpj1">
                    </div>

                    <div class="mb-3">
                        <label for="emissao" class="form-label">Data da Emissão </label>
                        <input type="date" class="form-control" name="emissao" id="emissao">
                    </div>

                    <div class="mb-3">
                        <label for="validade" class="form-label">Data de vencimento</label>
                        <input type="date" class="form-control" name="validade" id="validade">
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                </div>
            </div>
        </div>

    </div>

@endsection
