@extends('layout')

@section('title', 'Credenciadas')

@section('content')
    <div class="container-lg">
        @if(Session::has('message'))
            <div class="container-md" style="margin-top:20px;">
                <div class="alert {{Session::get('type')}} alert-dismissible row-md" role="alert" id="liveAlert">
                    {{Session::get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div style="margin-top: 20px;margin-bottom: 20px;">
            <a href="{{ action('LicencaController@create') }}">
                <button class="btn btn-primary">Cadastrar uma Licença</button>
            </a>
            <a href="{{ action('LicencaController@edit') }}">
                <button class="btn btn-primary">Revogar uma Licença</button>
            </a>
        </div>

    </div>
    <div class="container-sm">

        <table class="table table-bordered align-middle">
            <tr>
                <th scope="row">id</th>
                <th>Estabelecimento</th>
                <th>Emissão</th>
                <th>Validade</th>
                <th>Status da Licença</th>
            </tr>
            @foreach( $licencas as $licenca)

                <tr>
                    <td> {{ $licenca->id }} </td>
                    <td> {{$licenca->credenciada->cnpj}} </td>
                    <td> {{ $licenca->emissao }} </td>
                    <td> {{ $licenca->validade }} </td>
                    <td> @if($licenca->active == 1) Ativa @else revogada @endif</td>
                </tr>

            @endforeach

        </table>
    </div>

@endsection
