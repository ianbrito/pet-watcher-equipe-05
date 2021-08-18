@extends('layout')
@section('extra_css', '/css/table.css')

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

    </div>
    <div class="limiter-table">
        <div class="container-table100">
            <div class="container-button-table-page">
                <a href="{{ action('CredenciadaController@create') }}">
                    <button class="button-table-page">Cadastrar novo estabelecimento</button>
                </a>
            </div>
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead class="table100-head">
                            <tr>
                                <th scope="row" class="column_id">ID</th>
                                <th class="column_cnpj">CNPJ</th>
                                <th class="column_ie">Inscrição Estadual</th>
                                <th class="column_razao">Razão Social</th>
                                <th class="column_email">E-mail</th>
                                <th class="column_tel">Telefone</th>
                                <th class="column_address">Endereço</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $credenciadas as $credenciada)
                                <tr class='clickable-row' data-href='/credenciada/credenciada_{{ $credenciada->id }}'>
                                    <td class="column_id"><a>{{ $credenciada->id }}</a></td>
                                    <td class="column_cnpj"> {{ $credenciada->cnpj  }} </td>
                                    <td class="column_ie"> {{ $credenciada->inscricao_estadual }} </td>
                                    <td class="column_razao"> {{ $credenciada->razao_social }} </td>
                                    <td class="column_email"> {{ $credenciada->email }} </td>
                                    <td class="column_tel"> {{ $credenciada->telefone }} </td>
                                    <td class="column_address"> {{ $credenciada->endereco }} </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>

@endsection
