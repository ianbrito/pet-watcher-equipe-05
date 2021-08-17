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
            <a href="{{ action('CredenciadaController@create') }}">
                <button class="btn btn-primary">Cadastrar novo estabelecimento</button>
            </a>
        </div>
    </div>
    <div class="container-xxl" style="max-width: 1700px;">

        <table class="table table-bordered align-middle">
            <tr>
                <th scope="row">id</th>
                <th>CNPJ</th>
                <th>Inscrição Estadual</th>
                <th>Razão Social</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th colspan="3">Ações</th>
            </tr>
            @foreach( $credenciadas as $credenciada)

                <tr>
                    <td><a href="/credenciada/credenciada_{{ $credenciada->id }}">{{ $credenciada->id }}</a></td>
                    <td> {{ $credenciada->cnpj  }} </td>
                    <td> {{ $credenciada->inscricao_estadual }} </td>
                    <td> {{ $credenciada->razao_social }} </td>
                    <td> {{ $credenciada->telefone }} </td>
                    <td> {{ $credenciada->email }} </td>
                    <td> {{ $credenciada->endereco }} </td>
                    <td><a
                           href="/credenciada/credenciada_{{ $credenciada->id }}/edit">Editar</a></td>
                    <td><a
                           href="/credenciada/credenciada_{{ $credenciada->id }}/password">Trocar senha</a></td>
                    <td>
                        @if($credenciada->active)
                            <form action="{{ action('CredenciadaController@destroy', $credenciada->id) }}" method="post"
                                  onsubmit="return confirm('Você deseja desabilitar este registro (&quot;{{ $credenciada->razao_social }}&quot;) do sistema?')">
                                @csrf
                                {{ method_field('delete') }}
                                <input class="btn btn-primary" type="submit" value="desabilitar">
                            </form>
                        @else
                            <form action="{{ action('CredenciadaController@destroy', $credenciada->id) }}" method="post"
                                  onsubmit="return confirm('Você deseja ativar este registro (&quot;{{ $credenciada->razao_social }}&quot;) do sistema?')">
                                @csrf
                                {{ method_field('delete') }}
                                <input class="btn btn-primary" type="submit" value="ativar">
                            </form>
                        @endif
                    </td>
                </tr>

            @endforeach

        </table>

    </div>






@endsection
