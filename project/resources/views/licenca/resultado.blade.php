@extends('layout')
@section('extra_css', '/css/table.css')
@section('title', 'Revogar licença')

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
    </div>

    <div class="limiter-table">
        <div class="container-table100">
            <div class="container-button-table-page">
                <a href="{{ action('LicencaController@edit') }}">
                    <button class="button-table-view">Voltar</button>
                </a>
            </div>
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead class="table100-head">
                        <tr>
                            <th scope="row" class="column_id">ID</th>
                            <th class="column_cnpj">Estabelecimento</th>
                            <th class="column_ie">Data de licenciamento</th>
                            <th class="column_ie">Data de vencimento</th>
                            <th class="column_id">Status da Licença</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($licencas as $licenca)
                            <tr>
                                <td class="column_id"> {{ $licenca->id }} </td>
                                <td class="column_cnpj"> {{$licenca->credenciada->cnpj}} </td>
                                <td class="column_ie"> {{ $licenca->emissao }} </td>
                                <td class="column_ie"> {{ $licenca->validade }} </td>
                                <td class="column_id">
                                    @if($licenca->active == 1)
                                        <form action="{{ action('LicencaController@destroy', $licenca->id) }}"
                                              method="post"
                                              onsubmit="return confirm('Você deseja revogar a licença selecionada do sistema?')">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <button class="status-invalid">Revogar licença</button>
                                        </form>
                                    @else
                                        <button class="status-disabled">Revogada</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
